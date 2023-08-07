<script>
    $(".openGroupSidebar").click(function() {

        $("#groupbid_sidebar").addClass('sidebaropen-width');
        $('#bag_quantity').val('');
        $('#bid_amount').val('');
        $('.finalweight').html('');
        $('.fullweight').html('');
        var id = $(this).attr('data-id');
        var rank = $('.productrank' + id).html();
        $('#groupbidoffers').empty();
        $('#groupbidoffers').append("<li><span class='rank'>"+rank+"</span></li>");
        $('.lotproductid').html(id);
        var weight = $('.productweight' + id).html();
        var finalweight = parseFloat(weight.replace(/[^0-9.]/g, ''));
        $('.productbags').html(finalweight / 20);

        $.ajax({
            url: "{{ route('groupbiddingsidebar') }}",
            method: 'POST',
            data: {
                id: id,
                _token: "{{ csrf_token() }}",
            },
            success: function(response) {
                var my = response.groupbid;
                const interval_id = window.setInterval(function(){}, Number.MAX_SAFE_INTEGER);

// Clear any timeout/interval up to that id
var other_check=0;

        for (let i = 1; i < interval_id; i++) {
             window.clearInterval(i);
            }
                if (my.length != 0) {
                    $('#offers').empty();
                    $('#other-offers').empty();
                    $('.some_div').empty();
                    var isActive = my[0].is_active;
                    var amount = my[0].amount;
                    var user_id = my[0].user_id;
                    var lotid = $('.lotproductid').html();
                    var auctionproductid = my[0].auction_product_id;
                    if (isActive == 1 && user_id == {{ Auth::user()->id ?? 0 }}) {
                        $('#bag_quantity').val('');
                        $('#bid_amount').val('');
                        $('.finalweight').html('');
                        $('.show-bid-confirm').show();
                        $('.liabiltysec').hide();
                        $('.confirmgroupbidbutton').prop('disabled', false);
                    }

                    var i;
                    var offers_all = [];
                    for (i = 0; i < my.length; ++i) {
                        var weight = my[i].accopied_wieght / 20;
                        var amount = my[i].amount;
                        var liability = my[i].accopied_wieght * amount;
                        var rem_weight = my[i].remainig_weight / 20;
                        if (my[i].my_check == true) {
                            $('#offers').append("<li class='offersli"+my[i].id+"'> <div class='lotidparent' ><span class='lotid'>" + my[i].rank +
                                " </span> <button class='lotid-cancelbutton' onclick='cancelOffer("+my[i].user_offer_id+")'>× </button> </div> <div class='lotidchild'><div class='lotidchild-1'><p>Amount: $" + addCommas(my[i].amount) + "<p>Bags:" + weight +
                                "</p></div><div class='lotidchild-1'> <p>Liablity:$" + addCommas(liability) +
                                "</p><p>Remaining time: <b id='some_div" + i + "'></b></p>" +
                                counter(my[i].id, i, my[i].start_time, my[i].end_time,my[i].user_id) +
                                "</div></div></li>");
                                if(other_check==0 || other_check!==my[i].id){
                                    if(offers_all.includes(my[i].id))
                                    {

                                    }
                                    else{
                        offers_all.push(my[i].id);
                            $('#other-offers').append(
                                "<li class='othersofferli"+my[i].id+"'><span class='lot-toggle-btn'> " + my[i].rank + " </span><button type='button' class='singlebidbtn btn mt-15 mb-1' data-toggle='collapse' data-target='#demo" +
                        i + "'> " + 'Participate' + " </button><li><div class='lotid-groupoffers'><p>Amount: <span  class='offeramount" + my[i].id +
                                "'>" + '$' + addCommas(my[i].amount) +
                                "</span></p><p>Remaining Bags: <span class='remainingbags" + my[
                                    i].id + "'>" + rem_weight +
                                "</span></p></div><p>Remaining time: <b  id='mysome_div" + i + "'></b></p>" +
                                counter(my[i].id, i, my[i].start_time, my[i].end_time,my[i].user_id) +
                                "</li><div id='demo" + i +
                                "' class='groupbid-offers collapse'><div class='col-8'>  <label>Bags Quantity:</label> <input type='number' class='form-control bag_quant" +
                                my[i].id + "' id='remaining_bag_quantity' min='1' data-id='" + my[i]
                                .id +
                                "' name='bag_quantity'><input type='hidden' class='offerhiddenid" +
                                my[i].id + "' value='" + my[i].id +
                                "'> <span class='validationbags" + my[i].id +
                                " colorered'></span><span class='validationbagsnew" + my[i].id +
                                " colorered'><p style='font-weight: bold'>Weight:<span class='appendedfinalweight" +
                                my[i].id +
                                "'>--</span></p> <br> <button type='button' class='singlebidbtn btn appended-bid-confirm confirmgrpbid" +
                                my[i].id + "' data-id=" + my[i].id +
                                ">Post Group Bid</button> <br><div class='bid-confirm-sec hide liabiltysecappended" +
                                my[i].id +
                                "'><br><p >Bid:<b class='bidamountappended" +
                                my[i].id +
                                "'></b></p><p>Weight:<b class='liabilityweight" +
                                my[i].id +
                                "'></b> </p><p>Liability:<b class='liabilityappended" +
                                my[i].id +
                                "'></b></p><button class='singlebidbtn btn participategroupbidbutton' data-id='" +
                                my[i].id + "'lot-id='" + my[i].auction_product_id +
                                "' href='javascript:void(0)'>Confirm</button><button type='button' class='singlebidbtn btn cancelappendedgroupbtn mx-10' data-id='" +
                                my[i].id + "'>Cancel</button></div> </div> </div></li>");
                                other_check= my[i].id;
                    }
                }
            // }
                    // else{

                    // }
                        } else {
                            if(other_check==0 || other_check!==my[i].id){
                        if(offers_all.includes(my[i].id))
                        {

                        }
                    else{
                    offers_all.push(my[i].id);
                            $('#other-offers').append(
                                "<li class='othersofferli"+my[i].id+"'><span class='lot-toggle-btn'> " + my[i].rank + " </span><button type='button' class='singlebidbtn btn mt-7' data-toggle='collapse' data-target='#demo" +
                        i + "'> " + 'Participate' + " </button><li> <div class='lotidchild'><p>Amount: <span  class='offeramount" + my[i].id +
                                "'>" + '$' + addCommas(my[i].amount) +
                                "</span> </p><p>Remaining Bags: <span class='remainingbags" + my[
                                    i].id + "'>" + rem_weight +
                                "</span></p></div><p>Remaining time: <b  id='other_div" + i + "'></b></p>" +
                                counter(my[i].id, i, my[i].start_time, my[i].end_time,my[i].user_id) +
                                "</p></li><div id='demo" + i +
                                "' class='groupbid-offers collapse'><div class='col-8'>  <label>Bags Quantity:</label> <input type='number' class='form-control bag_quant" +
                                my[i].id + "' id='remaining_bag_quantity' data-id='" + my[i]
                                .id +
                                "' name='bag_quantity'><input type='hidden' class='offerhiddenid" +
                                my[i].id + "' value='" + my[i].id +
                                "'> <span class='validationbags" + my[i].id +
                                " colorered'></span><span class='validationbagsnew" + my[i].id +
                                " colorered'><p style='font-weight: bold'>Weight:<span class='appendedfinalweight" +
                                my[i].id +
                                "'>--</span></p> <br> <button type='button' class='singlebidbtn btn appended-bid-confirm confirmgrpbid" +
                                my[i].id + "' data-id=" + my[i].id +
                                ">Post Group Bid</button> <br><div class='bid-confirm-sec hide liabiltysecappended" +
                                my[i].id +
                                "'><br><p >Bid:<b class='bidamountappended" +
                                my[i].id +
                                "'></b></p><p>Weight:<b class='liabilityweight" +
                                my[i].id +
                                "'></b> </p><p>Liability:<b class='liabilityappended" +
                                my[i].id +
                                "'></b></p><button class='singlebidbtn btn participategroupbidbutton' data-id='" +
                                my[i].id + "'lot-id='" + my[i].auction_product_id +
                                "' href='javascript:void(0)'>Confirm</button><button type='button' class='singlebidbtn btn cancelappendedgroupbtn mx-10' data-id='" +
                                my[i].id + "'>Cancel</button></div> </div> </div></li>");
                                other_check= my[i].id;
                    }
                }
                    else{

                    }
                        }
                    }

                } else {
                    $('.groupbiddiv').show();
                    $('.offerdiv').hide();
                    $('#offers').empty();
                    $('#other-offers').empty();
                }
            },
            error: function(error) {
                console.log(error)
            }
        });
});

        $(document).on('focusout', '#remaining_bag_quantity', function() {
            var id       = $(this).attr('data-id');
            var maxvalue = $('.remainingbags'+id).html();
            var maximumbags = maxvalue;
            if (parseInt($(this).val()) > maximumbags)
            {
                $('.validationbags'+id).html('Please enter a value less than or equal to total bags.');
                $('.confirmgrpbid'+id).prop('disabled', true);
            }
            else
            {
                $('.validationbags'+id).html('');
                $('.confirmgrpbid'+id).prop('disabled', false);
                    var quantity    = $(this).val();
                    var totalweight = quantity*20;
                    $('.appendedfinalweight'+id).html(totalweight+'lbs');
            }
        });
        $(document).on('click', '.appended-bid-confirm', function() {
            var id     = $(this).attr('data-id');
            var bags   = $('.bag_quant'+id).val();
            if(bags == '')
            {
                $('.validationbags'+id).html('Please enter Bags.');
            }
            else
            {
                $('.confirmgrpbid'+id).hide();
                $('.liabiltysecappended'+id).show();
                var groupbidamount = $('.offeramount'+id).html();
               var finalgroupbidamount= parseFloat(groupbidamount.replace(/[^0-9.]/g, ''));
                var weight         = $('.appendedfinalweight'+id).html();
                var finalweight    = parseFloat(weight.replace(/[^0-9.]/g, ''));
                var liability      = finalweight*finalgroupbidamount;
                $('.bidamountappended'+id).html(addCommas(groupbidamount));
                $('.liabilityweight'+id).html(weight);
                $('.liabilityappended'+id).html('$'+addCommas(liability));
            }
        });
        $(document).on('click', '.cancelappendedgroupbtn', function() {
            var id     = $(this).attr('data-id');
            $('.confirmgrpbid'+id).show();
            $('.liabiltysecappended'+id).hide();
        });
        $(document).on('click', '.participategroupbidbutton', function() {
            var offerid        = $(this).attr('data-id');
            var id             = $(this).attr('lot-id');
            var weight         = $('.appendedfinalweight'+offerid).html();
            var finalweight    = parseFloat(weight.replace(/[^0-9.]/g, ''));
            var  bidamount = $('.offeramount'+offerid).html();
            var groupbidamount= parseFloat(bidamount.replace(/[^0-9.]/g, ''));
            var rembags = $('.remainingbags'+offerid).html();
            var bagssdded   =   $('.bag_quant'+offerid).val();
            var auctionid = $('.auctionid' + id).val();
            var isgroup = '1';

            if(bagssdded == rembags)
            {
                var ischeck='3';
                //save data in user offers table
                $.ajax({
                    url: "{{ route('saveothergroupbidoffer') }}",
                    method: 'POST',
                    data: {
                        offerid:offerid,
                        auctionproductid: id,
                        weight: finalweight,
                        amount:groupbidamount,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // console.log(response);

                        var otheroffers = response.otheroffers;
                        // alert($('.othersofferli'+offerID));
                        var offerID =response.otherOfffers.offer_id;
                        // alert(offerID);
                        // $('#offers').empty();
                        // $('#other-offers').empty();
                        $('.othersofferli'+offerID).empty();
                        $('.offersli'+offerID).empty();
                        $('#bag_quantity').val('');
                        $('#bid_amount').val('');
                        $('.show-bid-confirm').show();
                        $('.liabiltysec').hide();
                        var offersdata=response.groupbid;
                            socket.emit('{{env('SOCKET_PREFIX' , '')}}add_groupbid_updates', {
                             "offersdata": offersdata,
                            //  "adminofferData":adminofferData,

                        });
                    },
                    error: function(error) {
                        console.log(error)

                    }
                });
                //save data in autobid table if offer is on all weight
                $.ajax({
                    url: "{{ route('autobiddata') }}",
                    method: 'POST',
                    data: {
                        id: id,
                        autobidamount:groupbidamount,
                        auctionid:auctionid,
                        isgroup:isgroup,
                        ischeck:ischeck,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            // $('#offers').empty();
                            // $('#other-offers').empty();
                            // $('.some_div').empty();
                            $('.errorMsgAutoBid' + id).html('');
                            $('.errorMsgAutoBid' + id + id).html('');
                            $('.errorMsgAutoBid' + id + id).html(
                                '<p class="newautobidamount{{ @$auctionProduct->id }}">Current autobid is $' +
                                    addCommas(response.bid_amount) +
                                ' /lb</p>');
                            $('.autobidamount' + id).val('');
                            $('.alertMessage' + id).html('');
                            $(".bidnowbutton" + id).css("display",
                                "none");
                            $(".autobidClass" + id).css("display", "none");
                            $(".bidnowautobutton" + id).css("display", "none");
                            $(".autobidamount" + id).hide();
                            $(".nextincrement" + id).hide();
                        } else if (response.message !== null) {
                            $('.validationbagsnew'+offerid).html('');
                            $('.validationbagsnew'+offerid).html(response.message);
                            $('.bag_quant'+offerid).val('');
                            $('.confirmgrpbid'+offerid).show();
                            $('.liabiltysecappended'+offerid).hide();
                            // $('.errorMsgAutoBid' + id).html('');
                            // $('.errorMsgAutoBid' + id + id).html('');
                            // $('.errorMsgAutoBid' + id + id).html(response.message);
                            // $('.autobidamount' + id).show();
                            // $('.autobidamount' + id).val('');
                            // $('.bidnowautobutton' + id).show();
                            // $('.autobidClass' + id).hide();
                            // $('.nextincrement' + id).show();
                        } else {
                            var latestAutoBidId = response.id;
                            var bidPrice = response.bid_amountNew;
                            var bidID = response.auction_product_id;
                            var increment = response.bidIncrement;
                            var weightautobid = $(".weightautobid" + id).html();
                            var weight = parseFloat(weightautobid.replace(/[^\d\.]*/g, ''));
                            var liability = weight * bidPrice;
                            var paddleNo = response.userPaddleNo;
                            var nextIncrement = +increment + +bidPrice;
                            var outbid = response.outAutobid;
                            var autobidUserID = response.bidder_user_id;
                            var bidderLiablity = response.liablity;
                            var bidderID = response.user_id;
                            var bidderMaxBid = response.bidderMaxAmount;
                            var userbidAmount = response.bid_amount;
                            var totalAutoBidLiability = response.totalAutoBidLiability;
                            var bid_amountNew = response.bid_amountNew;
                            var loser = response.loser_user;
                            var winneruser = response.winneruser;
                            var checkTimer = response.timerCheck;
                            var isgroup    =response.isgroup;
                            var groupUsers = response.groupUsers;
                            var groupPaddleNo = response.groupPaddleNo;

                            $('.errorMsgAutoBid' + id).html('');
                            $(".bidcollapse" + bidID).addClass(
                                "changecolor");
                            $(".liabilitybidcollapse" + bidID).addClass(
                                "changecolor");
                            socket.emit('{{env('SOCKET_PREFIX' , '')}}auto_bid_updates', {
                                "autobidamount": userbidAmount,
                                "latestAutoBidId": latestAutoBidId,
                                'id': id,
                                "bidID": bidID,
                                'user_id': response.user_id,
                                "userbidAmount": userbidAmount,
                                "totalAutoBidLiability": totalAutoBidLiability,
                                "outbid": outbid,
                                "autobidUserID": autobidUserID,
                                "bid_amountNew": bid_amountNew,
                                "nextIncrement": nextIncrement,
                                "paddleNo": paddleNo,
                                "liability": liability,
                                "loser": loser,
                                "winneruser": winneruser,
                                "checkTimer": checkTimer,
                                "isgroup":isgroup,
                                "groupUsers":groupUsers,
                                "groupPaddleNo" : groupPaddleNo,

                            });
                            $('.errorMsgAutoBid' + id).html('');
                            $('.errorMsgAutoBid' + id + id).html('');
                            $('.errorMsgAutoBid' + id + id).html(
                                '<p>Current autobid is $' +
                                addCommas(response.bid_amount) +
                                ' /lb</p>');
                            $('.autobidamount' + id).val('');
                            $('.alertMessage' + id).html('');
                            $(".bidnowbutton" + id).css("display",
                                "none");
                            $(".autobidClass" + id).css("display", "none");
                            $(".bidnowautobutton" + id).css("display", "none");
                            $(".autobidamount" + id).hide();
                            $(".nextincrement" + id).hide();
                        }
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            }
            else
            {
                $.ajax({
                    url: "{{ route('saveothergroupbidoffer') }}",
                    method: 'POST',
                    data: {
                        offerid:offerid,
                        auctionproductid: id,
                        weight: finalweight,
                        amount:groupbidamount,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // console.log(response)
                        if (response.message !== null) {
                            $('.validationbagsnew'+offerid).html('');
                            $('.validationbagsnew'+offerid).html(response.message);
                            $('.bag_quant'+offerid).val('');
                            $('.confirmgrpbid'+offerid).show();
                            $('.liabiltysecappended'+offerid).hide();
                        }
                        var offersdata  = response.groupbid;
                        var adminofferData = response.adminOffers;
                            socket.emit('{{env('SOCKET_PREFIX' , '')}}add_groupbid_updates', {
                             "offersdata": offersdata,
                             "adminofferData":adminofferData,
                        });
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            }
        });
        //show bags quantity
        $(".bag_quantity").focusout(function(){
          $('.fullweight').html('');
          var maxvalue = $('.productbags').html();
          var maximumbags = maxvalue;
          if (parseInt($(this).val()) > maximumbags)
          {
            $('.validationbags').html('Please enter a value less than or equal to total bags.');
            $('.bag_quantity').val('');
            $('.show-bid-confirm').prop('disabled', true);
          }
            else
            {
                $('.validationbags').html('');
                $('.show-bid-confirm').prop('disabled', false);
                var quantity    = $(this).val();
                var totalweight = quantity*20;
                $('.finalweight').html(totalweight+'lbs');
            }
        });
        //show liabilty div
        $('.show-bid-confirm').click(function(){
            var amount      = $('.groupbidamount').val();
            var bags        = $('.bag_quantity').val();
            var id          = $('.lotproductid').html();
            var totalbags   = $('.productbags').html();
            var currentbid  = $('.bidData1'+id).html();
            var finalcurrentbid = parseFloat(currentbid.replace(/[^0-9.]/g, ''));
            if(bags == totalbags)
            {
                $('.fullweight').html('You are buying all bags you will not participate in group biding.');
            }
            if(bags == '')
            {
                $('.validationbags').html('Please enter Bags.');
            }
            if(amount == '')
            {
                $('.validationamount').html('Please enter Amount.');
            }
            if(amount <= finalcurrentbid)
            {
                $('.validationamount').html('Enter amount greater than current bid amount.');
            }
            else
            {
                $('.validationamount').html('');
                $('.validationbags').html('');
                $('.show-bid-confirm').hide();
                $('.liabiltysec').show();
                var groupbidamount = $('.groupbidamount').val();
                var weight         = $('.finalweight').html();
                var finalweight    = parseFloat(weight.replace(/[^0-9.]/g, ''));
                var liability      = finalweight*groupbidamount;
                $('.bidamount').html('$'+ addCommas(groupbidamount));
                $('.liabilityweight').html(weight);
                $('.finalliabilitygroupbid').html('$'+addCommas(liability));
                $('.confirmgroupbidbutton').prop('disabled', false);
            }
        });
        $('.cancelgroupbtn').click(function(){
            $('.show-bid-confirm').show();
            $('.liabiltysec').hide();
            $('.fullweight').html('');
            $('.bag_quantity').val('');
            $('.groupbidamount').val('');
            $('.validationbags').html('');
            $('.validationamount').html('');
            $('.confirmgroupbidbutton').prop('disabled', false);
        });
        //save group bid offer
        $('.confirmgroupbidbutton').click(function(){
            $('.confirmgroupbidbutton').prop('disabled', true);
            var id          = $('.lotproductid').html();
            //group offer weight
            var weight         = $('.finalweight').html();
            var finalweight    = parseFloat(weight.replace(/[^0-9.]/g, ''));
            var groupbidamount = $('.groupbidamount').val();
            //lot total weight
            var lotweight       = $('.productweight'+id).html();
            var finallotweight = parseFloat(lotweight.replace(/[^0-9.]/g, ''));
            var auctionid = $('.auctionid' + id).val();
            if(finalweight == finallotweight)
            {
                var ischeck='2';
                //save data in autobid table if offer is on all weight
                $.ajax({
                    url: "{{ route('autobiddata') }}",
                    method: 'POST',
                    data: {
                        id: id,
                        autobidamount:groupbidamount,
                        auctionid:auctionid,
                        ischeck:ischeck,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // console.log(response);
                        if (response.success) {
                            $('.errorMsgAutoBid' + id).html('');
                            $('.errorMsgAutoBid' + id + id).html('');
                            $('.errorMsgAutoBid' + id + id).html(
                                '<p class="newautobidamount{{ @$auctionProduct->id }}">Current autobid is $' +
                                addCommas(response.bid_amount) +
                                ' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id=' +
                                id + '>Remove</a>}</p>');
                            $('.autobidamount' + id).val('');
                            $('.alertMessage' + id).html('');
                            $(".bidnowbutton" + id).css("display",
                                "none");
                            $(".autobidClass" + id).css("display", "none");
                            $(".bidnowautobutton" + id).css("display", "none");
                            $(".autobidamount" + id).hide();
                            $(".nextincrement" + id).hide();
                        } else if (response.message !== null) {
                            $('.fullweight').html(response.message);
                            $('.show-bid-confirm').show();
                            $('.liabiltysec').hide();
                            $('.bag_quantity').val('');
                            $('.groupbidamount').val('');
                            // $('.errorMsgAutoBid' + id).html('');
                            // $('.errorMsgAutoBid' + id + id).html('');
                            // $('.errorMsgAutoBid' + id + id).html(response.message);
                            // $('.autobidamount' + id).show();
                            // $('.autobidamount' + id).val('');
                            // $('.bidnowautobutton' + id).show();
                            // $('.autobidClass' + id).hide();
                            // $('.nextincrement' + id).show();
                        } else {
                            var latestAutoBidId = response.id;
                            var bidPrice = response.bid_amountNew;
                            var bidID = response.auction_product_id;
                            var increment = response.bidIncrement;
                            var weightautobid = $(".weightautobid" + id).html();
                            var weight = parseFloat(weightautobid.replace(/[^\d\.]*/g, ''));
                            var liability = weight * bidPrice;
                            var paddleNo = response.userPaddleNo;
                            var nextIncrement = +increment + +bidPrice;
                            var outbid = response.outAutobid;
                            var autobidUserID = response.bidder_user_id;
                            var bidderLiablity = response.liablity;
                            var bidderID = response.user_id;
                            var bidderMaxBid = response.bidderMaxAmount;
                            var userbidAmount = response.bid_amount;
                            var totalAutoBidLiability = response.totalAutoBidLiability;
                            var bid_amountNew = response.bid_amountNew;
                            var loser = response.loser_user;
                            var winneruser = response.winneruser;
                            var checkTimer = response.timerCheck;
                            var groupPaddleNo = response.groupPaddleNo;

                            $('.errorMsgAutoBid' + id).html('');
                            $(".bidcollapse" + bidID).addClass(
                                "changecolor");
                            $(".liabilitybidcollapse" + bidID).addClass(
                                "changecolor");
                            socket.emit('{{env('SOCKET_PREFIX' , '')}}auto_bid_updates', {
                                "autobidamount": userbidAmount,
                                "latestAutoBidId": latestAutoBidId,
                                'id': id,
                                "bidID": bidID,
                                'user_id': response.user_id,
                                "userbidAmount": userbidAmount,
                                "totalAutoBidLiability": totalAutoBidLiability,
                                "outbid": outbid,
                                "autobidUserID": autobidUserID,
                                "bid_amountNew": bid_amountNew,
                                "nextIncrement": nextIncrement,
                                "paddleNo": paddleNo,
                                "liability": liability,
                                "loser": loser,
                                "winneruser": winneruser,
                                "checkTimer": checkTimer,
                                "groupPaddleNo":groupPaddleNo,

                            });
                            $('.errorMsgAutoBid' + id).html('');
                            $('.errorMsgAutoBid' + id + id).html('');
                            $('.errorMsgAutoBid' + id + id).html(
                                '<p>Current autobid is $' +
                                addCommas(response.bid_amount) +
                                ' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id=' +
                                id + '>Remove</a>}</p>');
                            $('.autobidamount' + id).val('');
                            $('.alertMessage' + id).html('');
                            $(".bidnowbutton" + id).css("display",
                                "none");
                            $(".autobidClass" + id).css("display", "none");
                              $(".bidnowautobutton" + id).css("display", "none");
                            $(".autobidamount" + id).hide();
                            $(".nextincrement" + id).hide();
                            $('#offers').empty();
                            $('#other-offers').empty();
                            $('#bag_quantity').val('');
                            $('#bid_amount').val('');
                            $('.show-bid-confirm').show();
                            $('.liabiltysec').hide();
                            $('.offerdiv').show();
                            $('.fullweight').html('');
                        }
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            }
            else
            {
                //save data in only offers table
                $.ajax({
                    url: "{{ route('savegroupbidoffer') }}",
                    method: 'POST',
                    data: {
                        id: id,
                        weight: finalweight,
                        amount:groupbidamount,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        if(response.message !=null)
                        {
                            $('.fullweight').html(response.message);
                            $('.show-bid-confirm').show();
                            $('.liabiltysec').hide();
                            $('.bag_quantity').val('');
                            $('.groupbidamount').val('');
                        }
                        else
                        {
                            $('.fullweight').html('');
                            // $('.finalliability').html('');
                            var isActive    = response.groupOfferData.is_active;
                            var amount      = response.groupOfferData.amount;
                            var user_id     = response.userOfffers.user_id;
                            var offersdata  = response.groupbid;
                            var adminofferData = response.adminOffers;
                        if(isActive==1 && user_id=={{Auth::user()->id ?? 0}})
                        {
                            $('#bag_quantity').val('');
                            $('#bid_amount').val('');
                            $('.show-bid-confirm').show();
                            $('.liabiltysec').hide();
                            $('.confirmgroupbidbutton').prop('disabled', false);
                        }
                            socket.emit('{{env('SOCKET_PREFIX' , '')}}add_groupbid_updates', {
                             "offersdata": offersdata,
                             "adminofferData":adminofferData,
                        });
                        }
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            }
        });
</script>


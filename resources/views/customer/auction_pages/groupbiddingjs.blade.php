<script>
    $(".openGroupSidebar").click(function() {
        $("#groupbid_sidebar").addClass('sidebaropen-width');
        var id = $(this).attr('data-id');
        var rank = $('.productrank' + id).html();
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
                var my = response;
                console.log(my);
                // alert(my.length)
                if (my.length != 0) {
                    $('#offers').empty();
                    $('#other-offers').empty();
                    var isActive = my[0].is_active;
                    var amount = my[0].amount;
                    var user_id = my[0].user_id;
                    var lotid = $('.lotproductid').html();
                    var auctionproductid = my[0].auction_product_id;
                    if (isActive == 1 && user_id == {{ Auth::user()->id }}) {
                        $('.offerdiv').show();
                        $('.groupbiddiv').hide();
                        $('.offerpost').html('$' + amount);
                    }

                    var i;
                    for (i = 0; i < my.length; ++i) {
                        var weight = my[i].accopied_wieght / 20;
                        var amount = my[i].amount;
                        var liability = my[i].accopied_wieght * amount;
                        var rem_weight = my[i].remainig_weight / 20;
                        if (my[i].my_check == true) {
                            $('#offers').append("<li><span class='lotid'>" + my[i].rank +
                                "</span><p>Amount: $" + my[i].amount + "<br>Bags:" + weight +
                                "<br>Liablity:$" + liability +
                                "<br>Remaining time: <div id='some_div" + i + "'></div>" +
                                counter(my[i].id, i, my[i].start_time, my[i].end_time) +
                                "</p></li>");

                        } else {
                            $('#other-offers').append(
                                "<li><span class='lot-toggle-btn'> " + my[i].rank + " </span><button type='button' class='singlebidbtn btn mt-15' data-toggle='collapse' data-target='#demo" +
                        i + "'> " + 'Participate' + " </button><li><p style='line-height: 30px'>Amount: <span  class='offeramount" + my[i].id +
                                "'>" + '$' + my[i].amount +
                                "</span><br>Remaining Bags: <span class='remainingbags" + my[
                                    i].id + "'>" + rem_weight +
                                "</span><br>Remaining time: <b  id='some_div" + i + "'></b>" +
                                counter(my[i].id, i, my[i].start_time, my[i].end_time) +
                                "</p></li><div id='demo" + i +
                                "' class='groupbid-offers collapse'><div class='col-8'>  <label>Bags Quantity:</label> <input type='number' class='form-control bag_quant" +
                                my[i].id + "' id='remaining_bag_quantity' data-id='" + my[i]
                                .id +
                                "' name='bag_quantity'><input type='hidden' class='offerhiddenid" +
                                my[i].id + "' value='" + my[i].id +
                                "'> <span class='validationbags" + my[i].id +
                                " colorered'></span><p style='font-weight: bold'>Weight:<span class='appendedfinalweight" +
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
                                my[i].id +
                                "' href='javascript:void(0)'>Confirm</button><button type='button' class='singlebidbtn btn cancelappendedgroupbtn mx-10' data-id='" +
                                my[i].id + "'>Cancel</button></div> </div> </div></li>");

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
//for appended data
//  $(document).on('change', '#remaining_bag_quantity', function() {
//           var id     = $(this).attr('data-id');
//           var maxvalue = $('.remainingbags'+id).html();
//           var max = maxvalue;
//           var min = 1;
//           if ($(this).val() > max)
//           {
//               $(this).val(max);
//           }
//           else if ($(this).val() < min)
//           {
//               $(this).val(min);
//           }
//         });
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
                    $('.appendedfinalweight'+id).html(totalweight+'/lbs');
            }

            // var id     = $(this).attr('data-id');
            // var quantity    = $(this).val();
            // var totalweight = quantity*20;
            //  $('.appendedfinalweight'+id).html(totalweight+'/lbs');
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
                // alert(groupbidamount);
                var liability      = finalweight*finalgroupbidamount;
                $('.bidamountappended'+id).html(groupbidamount);
                $('.liabilityweight'+id).html(weight);
                $('.liabilityappended'+id).html('$'+liability);
            }
        });
        $(document).on('click', '.cancelappendedgroupbtn', function() {
            var id     = $(this).attr('data-id');
            $('.confirmgrpbid'+id).show();
            $('.liabiltysecappended'+id).hide();
        });
        $(document).on('click', '.participategroupbidbutton', function() {
            var offerid        = $(this).attr('data-id');
            var id             = $('.lotproductid').html();
            var weight         = $('.appendedfinalweight'+offerid).html();
            var finalweight    = parseFloat(weight.replace(/[^0-9.]/g, ''));

            var  bidamount = $('.offeramount'+offerid).html();
            var groupbidamount= parseFloat(bidamount.replace(/[^0-9.]/g, ''));

            // alert(groupbidamount);
             //lot total weight
            var rembags = $('.remainingbags'+offerid).html();
            var bagssdded   =   $('.bag_quant'+offerid).val();
            // var lotweight       = $('.productweight'+id).html();
            // var finallotweight = parseFloat(lotweight.replace(/[^0-9.]/g, ''));
            var auctionid = $('.auctionid' + id).val();
            if(bagssdded == rembags)
            {
                //save data in autobid table if offer is on all weight
                $.ajax({
                    url: "{{ route('autobiddata') }}",
                    method: 'POST',
                    data: {
                        id: id,
                        autobidamount:groupbidamount,
                        auctionid:auctionid,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // console.log(response);
                        if (response.success) {
                            $('.errorMsgAutoBid' + id).html('');
                            $('.errorMsgAutoBid' + id + id).html('');
                            $('.errorMsgAutoBid' + id + id).html(
                                '<p class="newautobidamount{{ $auctionProduct->id }}">Current autobid is $' +
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
                            $('.errorMsgAutoBid' + id).html('');
                            $('.errorMsgAutoBid' + id + id).html('');
                            $('.errorMsgAutoBid' + id + id).html(response.message);
                            $('.autobidamount' + id).show();
                            $('.autobidamount' + id).val('');
                            $('.bidnowautobutton' + id).show();
                            $('.autobidClass' + id).hide();
                            $('.nextincrement' + id).show();
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
                            $('.errorMsgAutoBid' + id).html('');
                            $(".bidcollapse" + bidID).addClass(
                                "changecolor");
                            $(".liabilitybidcollapse" + bidID).addClass(
                                "changecolor");
                            socket.emit('auto_bid_updates', {
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
                        }
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
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
                        $('#offers').empty();
                        $('#other-offers').empty();
                        $('#bag_quantity').val('');
                        $('#bid_amount').val('');
                        $('.show-bid-confirm').show();
                        $('.liabiltysec').hide();


                        // var isActive    = response.activeOffers.is_active;
                        // var amount      = response.activeOffers.amount;
                        // var user_id     = response.otherOfffers.user_id;
                        // var offersdata  = response.groupbid;
                        // var adminofferData = response.adminOffers;
                        // if(isActive==1 && user_id=={{Auth::user()->id}})
                        // {
                        //     $('.offerdiv').show();
                        //     $('.groupbiddiv').hide();
                        //     $('.offerpost').html('$'+amount);
                        // }
                        //     socket.emit('add_groupbid_updates', {
                        //      "offersdata": offersdata,
                        //      "adminofferData":adminofferData,
                        // });
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
                        console.log(response);
                        var isActive    = response.activeOffers.is_active;
                        var amount      = response.activeOffers.amount;
                        var user_id     = response.otherOfffers.user_id;
                        var offersdata  = response.groupbid;
                        var adminofferData = response.adminOffers;
                        if(isActive==1 && user_id=={{Auth::user()->id}})
                        {
                            $('.offerdiv').show();
                            $('.groupbiddiv').hide();
                            $('.offerpost').html('$'+amount);
                        }
                            socket.emit('add_groupbid_updates', {
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
          var maxvalue = $('.productbags').html();
          var maximumbags = maxvalue;
          if (parseInt($(this).val()) > maximumbags)
          {
            $('.validationbags').html('Please enter a value less than or equal to total bags.');
            $('.show-bid-confirm').prop('disabled', true);
          }
            else
            {
                $('.validationbags').html('');
                $('.show-bid-confirm').prop('disabled', false);
                var quantity    = $(this).val();
                var totalweight = quantity*20;
                $('.finalweight').html(totalweight+'/lbs');
            }

        });
        //show liabilty div
        $('.show-bid-confirm').click(function(){
            var amount      = $('.groupbidamount').val();
            var bags        = $('.bag_quantity').val();
            var id          = $('.lotproductid').html();
            // alert(id);
            var currentbid       = $('.bidData1'+id).html();
            var finalcurrentbid = parseFloat(currentbid.replace(/[^0-9.]/g, ''));

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
                $('.bidamount').html('$'+groupbidamount);
                $('.liabilityweight').html(weight);
                $('.finalliability').html('$'+liability);

            }
        });
        $('.cancelgroupbtn').click(function(){
            $('.show-bid-confirm').show();
            $('.liabiltysec').hide();
        });
        //save group bid offer
        $('.confirmgroupbidbutton').click(function(){
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
                //save data in autobid table if offer is on all weight
                $.ajax({
                    url: "{{ route('autobiddata') }}",
                    method: 'POST',
                    data: {
                        id: id,
                        autobidamount:groupbidamount,
                        auctionid:auctionid,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // console.log(response);
                        if (response.success) {
                            $('.errorMsgAutoBid' + id).html('');
                            $('.errorMsgAutoBid' + id + id).html('');
                            $('.errorMsgAutoBid' + id + id).html(
                                '<p class="newautobidamount{{ $auctionProduct->id }}">Current autobid is $' +
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
                            // alert('(response.message !== null');
                            $('.errorMsgAutoBid' + id).html('');
                            $('.errorMsgAutoBid' + id + id).html('');
                            $('.errorMsgAutoBid' + id + id).html(response.message);
                            $('.autobidamount' + id).show();
                            $('.autobidamount' + id).val('');
                            $('.bidnowautobutton' + id).show();
                            $('.autobidClass' + id).hide();
                            $('.nextincrement' + id).show();
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
                            $('.errorMsgAutoBid' + id).html('');
                            $(".bidcollapse" + bidID).addClass(
                                "changecolor");
                            $(".liabilitybidcollapse" + bidID).addClass(
                                "changecolor");
                            socket.emit('auto_bid_updates', {
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
                        }
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
                //save data in offers table
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
                        $('#offers').empty();
                        $('#other-offers').empty();
                        $('#bag_quantity').val('');
                        $('#bid_amount').val('');
                        $('.show-bid-confirm').show();
                        $('.liabiltysec').hide();
                        // console.log(response);
                        // var isActive    = response.groupOfferData.is_active;
                        // var amount      = response.groupOfferData.amount;
                        // var user_id     = response.userOfffers.user_id;
                        // var offersdata  = response.groupbid;
                        // var adminofferData = response.adminOffers;
                        // if(isActive==1 && user_id=={{Auth::user()->id}})
                        // {
                        //     $('.offerdiv').show();
                        //     $('.groupbiddiv').hide();
                        //     $('.offerpost').html('$'+amount);
                        // }
                        //     socket.emit('add_groupbid_updates', {
                        //      "offersdata": offersdata,
                        //      "adminofferData":adminofferData,
                        // });
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
                        // console.log(response);
                        var isActive    = response.groupOfferData.is_active;
                        var amount      = response.groupOfferData.amount;
                        var user_id     = response.userOfffers.user_id;
                        var offersdata  = response.groupbid;
                        var adminofferData = response.adminOffers;
                        if(isActive==1 && user_id=={{Auth::user()->id}})
                        {
                            $('.offerdiv').show();
                            $('.groupbiddiv').hide();
                            $('.offerpost').html('$'+amount);
                        }
                            socket.emit('add_groupbid_updates', {
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
</script>


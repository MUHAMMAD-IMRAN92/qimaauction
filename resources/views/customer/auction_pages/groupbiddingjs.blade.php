<script>
$(".openGroupSidebar").click(function() {
    $("#groupbid_sidebar").addClass('sidebaropen-width');
    var id     = $(this).attr('data-id');
    var rank   = $('.productrank'+id).html();
    $('.lotproductid').html(id);
    var weight = $('.productweight'+id).html();
    var finalweight= parseFloat(weight.replace(/[^0-9.]/g, ''));
    $('.productbags').html(finalweight/20);
    $.ajax({
        url: "{{ route('groupbiddingsidebar') }}",
        method: 'POST',
        data: {
            id: id,
            _token: "{{ csrf_token() }}",
        },
        success: function(response) {
                    var my=response;
                    console.log(my);
                    // alert(my.length)
                    if(my.length != 0)
                    {
                        $('#offers').empty();
                        $('#other-offers').empty();
                        var isActive         = my[0].is_active;
                        var amount           = my[0].amount;
                        var user_id          = my[0].user_id;
                        var lotid            = $('.lotproductid').html();
                        var auctionproductid = my[0].auction_product_id;
                        if(isActive==1 && user_id=={{Auth::user()->id}})
                        {
                            $('.offerdiv').show();
                            $('.groupbiddiv').hide();
                            $('.offerpost').html('$'+amount);
                        }

                        var i;
                        for (i = 0; i < my.length; ++i) {
                            var weight    = my[i].accopied_wieght/20;
                            var amount    = my[i].amount;
                            var liability = my[i].accopied_wieght*amount;
                            var rem_weight =my[i].remainig_weight/20;
                            if (my[i].my_check==true) {
                                $('#offers').append("<li><span class='lotid'>"+my[i].rank+"</span><p>Amount:$"+my[i].amount+"<br>Bags:"+weight+"<br>Liablity:$"+liability+"</p></li>");

                            } else {
                                $('#other-offers').append("<li><h6><button type='button' class=' lot-toggle-btn' data-toggle='collapse' data-target='#demo"+i+"'> "+my[i].rank+" </button><li><p>Amount:$<span class='offeramount"+my[i].id+"'>"+my[i].amount+"</span></p><p>Remaining Bags:<span class='remainingbags"+my[i].id+"'>"+rem_weight+"</span></p></li></h6><div id='demo"+i+"' class='groupbid-offers collapse'><div class='col-8'>  <label>Bags Quantity:</label> <input type='number' class='form-control bag_quant"+my[i].id+"' id='remaining_bag_quantity' data-id='"+my[i].id+"' name='bag_quantity'><input type='hidden' class='offerhiddenid"+my[i].id+"' value='"+my[i].id+"'> <span class='validationbags"+my[i].id+" colorered'></span><p style='font-weight: bold'>Weight:<span class='appendedfinalweight"+my[i].id+"'>--</span></p> <br> <button type='button' class='singlebidbtn btn appended-bid-confirm confirmgrpbid"+my[i].id+"' data-id="+my[i].id+">Post Group Bid</button> <br><div class='bid-confirm-sec hide liabiltysecappended"+my[i].id+"'><br><p style='font-weight: bold'>Bid:<span class='bidamountappended"+my[i].id+"'></span></p><p style='font-weight: bold'>Weight:<span class='liabilityweight"+my[i].id+"'></span> </p><p style='font-weight: bold'>Liability:<span class='liabilityappended"+my[i].id+"'></span></p><button class='singlebidbtn btn participategroupbidbutton' data-id='"+my[i].id+"' href='javascript:void(0)'>Confirm</button><button type='button' class='singlebidbtn btn cancelappendedgroupbtn' data-id='"+my[i].id+"'>Cancel</button></div> </div> </div></li>");

                            }
                        }

                    }
                else
                {
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
 $(document).on('change', '#remaining_bag_quantity', function() {
          var id     = $(this).attr('data-id');
          var maxvalue = $('.remainingbags'+id).html();
          var max = maxvalue;
          var min = 1;
          if ($(this).val() > max)
          {
              $(this).val(max);
          }
          else if ($(this).val() < min)
          {
              $(this).val(min);
          }
        });
        $(document).on('focusout', '#remaining_bag_quantity', function() {
            var id     = $(this).attr('data-id');
            var quantity    = $(this).val();
            var totalweight = quantity*20;
             $('.appendedfinalweight'+id).html(totalweight+'/lbs');
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
                var weight         = $('.appendedfinalweight'+id).html();
                var finalweight    = parseFloat(weight.replace(/[^0-9.]/g, ''));
                var liability      = finalweight*groupbidamount;
                $('.bidamountappended'+id).html('$'+groupbidamount);
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
            var id              = $(this).attr('data-id');
            var lotid           = $('.lotproductid').html();
            var weight         = $('.appendedfinalweight'+id).html();
            var finalweight    = parseFloat(weight.replace(/[^0-9.]/g, ''));
            var groupbidamount = $('.offeramount'+id).html();

            $.ajax({
                    url: "{{ route('saveothergroupbidoffer') }}",
                    method: 'POST',
                    data: {
                        offerid:id,
                        auctionproductid: lotid,
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
        });
        $( ".bag_quantity" ).change(function() {
        var maxvalue = $('.productbags').html();
          var max = maxvalue;
          var min = 1;
          if ($(this).val() > max)
          {
              $(this).val(max);
          }
          else if ($(this).val() < min)
          {
              $(this).val(min);
          }
        });
        //show bags quantity
        $(".bag_quantity").focusout(function(){
            var quantity    = $(this).val();
            var totalweight = quantity*20;
             $('.finalweight').html(totalweight+'/lbs');
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
            var lotid          = $('.lotproductid').html();
            //group offer weight
            var weight         = $('.finalweight').html();
            var finalweight    = parseFloat(weight.replace(/[^0-9.]/g, ''));
            var groupbidamount = $('.groupbidamount').val();
            //lot total weight
            var lotweight      = $('.productweight'+lotid).html();
            var finallotweight = parseFloat(lotweight.replace(/[^0-9.]/g, ''));
            var auctionid      = $('.auctionid' + lotid).val();
            if(finalweight == finallotweight)
            {
                $.ajax({
                    url: "{{ route('autobiddata') }}",
                    method: 'POST',
                    data: {
                        id: lotid,
                        autobidamount:groupbidamount,
                        auctionid:auctionid,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
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
            $.ajax({
                    url: "{{ route('savegroupbidoffer') }}",
                    method: 'POST',
                    data: {
                        id: lotid,
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
        });
</script>

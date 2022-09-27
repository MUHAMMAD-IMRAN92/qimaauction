<script>
    function counter(offer_id,id,time,endtime){
        // alert(endtime)

        var curnet_time=new Date();
        var curnet_time = AddMinutesToDate(curnet_time,30000);
        var end_time=new Date(endtime);
        var seconds = end_time - curnet_time;
        var dif = (seconds/1000)/60;
        var timeLeft = Math.round(dif*60);
        var timerId = setInterval(countdown, 1000);
        // for (let i = 0; i < timerId; i++) {
        //     window.clearInterval(i);
        // }
         function AddMinutesToDate(date, minutes) {
             return new Date(date.getTime() - minutes*60000);
           }
function countdown() {
    if (timeLeft <= 0) {
        clearTimeout(timerId);
        for (let i = 0; i < timerId; i++) {
            window.clearInterval(i);
        }
        doSomething(offer_id);
    } else {

        // console.log(timeLeft)
        // console.log('id'+timerId)
        document.getElementById('some_div'+id).innerHTML = timeLeft + ' seconds remaining';
        // $('#some_div'+id).replaceWith('<b id="some_div0">'+ timeLeft +' seconds remaining</b>')
        timeLeft--;
    }
}

function doSomething(offer_id) {

            $.ajax({
                url: "{{ route('groupbidupdateStatus') }}",
                method: 'POST',
                data: {
                    id: offer_id,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                            var my=response;
                            var offersdata=response.offersdata
                            socket.emit('add_groupbid_updates', {
                             "offersdata": offersdata,
                            //  "adminofferData":adminofferData,

                        });
                            console.log(offersdata);
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });

}
return "";
    }
</script>

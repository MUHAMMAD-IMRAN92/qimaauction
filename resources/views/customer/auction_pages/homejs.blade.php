<script>
    function counter(offer_id,id,time,endtime){
        var curnet_time=new Date();
        var end_time=new Date(endtime);
        var seconds = end_time - curnet_time;
        var dif = (seconds/1000)/60;
        var timeLeft = Math.round(dif*60);

    var timerId = setInterval(countdown, 1000);

function countdown() {
    if (timeLeft == -1) {
        clearTimeout(timerId);
        doSomething(offer_id);
    } else {
        document.getElementById('some_div'+id).innerHTML = timeLeft + ' seconds remaining';
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
                            console.log(my);
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });

}
return "";
    }
</script>

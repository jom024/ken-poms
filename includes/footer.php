<?php

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/script.js"></script>

<script>
    // view-order
    $(document).ready(function (){

        $('.view-order').click(function (e) {
            e.preventDefault();

            // console.log('hello');

            var order_id = $(this).closest('tr').find('.order-id').text();
            
            $.ajax({
                type: "POST",
                url: "code.php",
                data: {
                    'click-view-btn': true,
                    'order-id':order_id,                
                },
                success: function (response) {
                    // console.log(response);

                    $('.view-order-data').html(response);
                    $('#viewOrderModal').modal('show');
                }
            });
        });
    });

    // edit-order
    $(document).ready(function (){

        $('.edit-order').click(function (e) {
            e.preventDefault();


            var order_id = $(this).closest('tr').find('.order-id').text();
            console.log(order_id);
            
            $.ajax({
                type: "POST",
                url: "code.php",
                data: {
                    'click-edit-btn': true,
                    'order-id':order_id,                
                },
                success: function (response) {
                    // console.log(response);

                    $.each(response, function (Key, value) {
                        // console.log(value['client_id']);

                        $('#order_id').val(value['order_id']);
                        $('#client_id').val(value['client_id']);
                        $('#order_status').val(value['order_status']);
                        $('#payment_status').val(value['payment_status']);
                        $('#priceID').val(value['total_price']);
                        $('#order_date').val(value['order_date']);
                        $('#fulfillment_date').val(value['fulfillment_date']);
                    });
                    // $('#editOrder').modal('show');
                }
            });
        });
    });

    // delete-order
    $(document).ready(function (){
        $('.delete_btn').click(function (e) {
            e.preventDefault();

            var order_id = $(this).closest('tr').find('.order-id').text();
            // console.log(order_id);

            $.ajax({
                method: "POST",
                url: "code.php",
                data: {
                    'click_delete_btn': true,
                    'order-id': order_id,
                },
                success: function (response) {
                    console.log(response);
                    window.location.reload();
                }
            });

        });
    });
</script>

    
<?php

?>
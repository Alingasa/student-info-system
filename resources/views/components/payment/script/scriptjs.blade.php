<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Toggle search bar visibility based on user count
        var userCount = {{ count($payment) }};
        if (userCount > 10) {
            $('#searchBar').show();
        } else {
            $('#searchBar').hide();
        }

        // Handle user search
        $('#searchBar').on('input', function () {
            var searchTerm = $(this).val().toLowerCase();
            $('.user-row').each(function () {
                var enrollmentNo = $(this).find('td:eq(1)').text().toLowerCase();
                var payable = $(this).find('td:eq(2)').text().toLowerCase();
                var refund = $(this).find('td:eq(3)').text().toLowerCase();
               
              

                if (
                    enrollmentNo.includes(searchTerm) ||
                    payable.includes(searchTerm) ||
                    refund.includes(searchTerm) ||
                   
                ) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
        
    });
</script>
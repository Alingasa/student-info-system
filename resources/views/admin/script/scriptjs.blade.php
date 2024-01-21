<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Toggle search bar visibility based on user count
        var userCount = {{ count($Admin) }};
        if (userCount > 10) {
            $('#searchBar').show();
        } else {
            $('#searchBar').hide();
        }

        // Handle user search
        $('#searchBar').on('input', function () {
            var searchTerm = $(this).val().toLowerCase();
            $('.user-row').each(function () {
                var userName = $(this).find('td:eq(1)').text().toLowerCase();
                var lastName = $(this).find('td:eq(2)').text().toLowerCase();
                var role = $(this).find('td:eq(3)').text().toLowerCase();
                var email = $(this).find('td:eq(4)').text().toLowerCase();
                var status = $(this).find('td:eq(5)').text().toLowerCase();

                if (
                    userName.includes(searchTerm) ||
                    lastName.includes(searchTerm) ||
                    role.includes(searchTerm) ||
                    email.includes(searchTerm) ||
                    status.includes(searchTerm)
                ) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
        
    });
</script>
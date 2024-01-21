<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Toggle search bar visibility based on user count
        var userCount = {{ count($enrollments) }};
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
                var fullName = $(this).find('td:eq(2)').text().toLowerCase();
                var course = $(this).find('td:eq(3)').text().toLowerCase();
                var subject_enroll = $(this).find('td:eq(4)').text().toLowerCase();
                var fees = $(this).find('td:eq(5)').text().toLowerCase();

                if (
                    enrollmentNo.includes(searchTerm) ||
                    fullName.includes(searchTerm) ||
                    course.includes(searchTerm) ||
                    subject_enroll.includes(searchTerm) ||
                    fees.includes(searchTerm)
                ) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
        
    });
</script>
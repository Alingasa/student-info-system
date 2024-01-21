

<script>
    // JavaScript to handle autocomplete and update the hidden input field
    document.getElementById('student_search').addEventListener('input', function () {
        var input = this.value.toLowerCase();
        var dataList = document.getElementById('studentsList');
        var options = dataList.querySelectorAll('option');
        
        options.forEach(function (option) {
            var text = option.value.toLowerCase();
            option.style.display = text.indexOf(input) !== -1 ? 'block' : 'none';
        });
    });

    // JavaScript to update the hidden input field when a suggestion is selected
    document.getElementById('student_search').addEventListener('change', function () {
        var selectedOption = document.querySelector('#studentsList option[value="' + this.value + '"]');
        if (selectedOption) {
            document.getElementById('selected_student_id').value = selectedOption.getAttribute('data-id');
        } else {
            document.getElementById('selected_student_id').value = '';
        }
    });
</script>
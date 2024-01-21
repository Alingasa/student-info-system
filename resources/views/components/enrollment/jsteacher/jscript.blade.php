
<script>
  // JavaScript to handle autocomplete and update the hidden input field
  document.getElementById('teacher_search').addEventListener('input', function () {
      var input = this.value.toLowerCase();
      var dataList = document.getElementById('teachersList');
      var options = dataList.querySelectorAll('option');
      
      options.forEach(function (option) {
          var text = option.value.toLowerCase();
          option.style.display = text.indexOf(input) !== -1 ? 'block' : 'none';
      });
  });

  // JavaScript to update the hidden input field when a suggestion is selected
  document.getElementById('teacher_search').addEventListener('change', function () {
      var selectedOption = document.querySelector('#teachersList option[value="' + this.value + '"]');
      if (selectedOption) {
          document.getElementById('selected_teacher_id').value = selectedOption.getAttribute('data-id');
      } else {
          document.getElementById('selected_teacher_id').value = '';
      }
  });
</script>
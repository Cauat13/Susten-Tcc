$(document).ready(function () {
    $('#search').on('keyup', function () {
        var searchTerm = $(this).val();

        if (searchTerm !== '') {
            $.ajax({
                url: '../src/search.php',
                type: 'GET',
                data: { query: searchTerm },
                success: function (data) {
                    $('#search-results').html(data);
                }
            });
        } else {
            $('#search-results').html('');
        }
    });

    $('#search-results').on('click', 'li', function () {
        var selectedValue = $(this).text();
        $('#search').val(selectedValue);
        $('#search-results').html('');
    });
});
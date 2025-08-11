<script>
    $(document).ready(function () {
        var image_b = $('#basicuse').data('image-b');
        var image_s = $('#basicuse').data('image-s');
        var title = $('#basicuse').data('title');

        $('#basicuse').jflickrfeed({
            limit: 6,
            qstrings: {
                id: '133294431@N08'
            },
            itemTemplate:
                '<li>' +
                '<a href="' + image_b + '"><img src="' + image_s + '" alt="' + title + '" /></a>' +
                '</li>'
        });
    });
</script>

$(document).ready(function () {

    // Summernote
    $('#description').summernote({
        placeholder: 'Enter here...',
        height: 300
    });

    // Image Preview (Common for all inputs)
    $('.preview-input').on('change', function () {
        let input = this;
        let previewId = $(this).data('preview');
        let preview = $('#' + previewId);

        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function (e) {
                preview.attr('src', e.target.result);
                preview.show();
            };

            reader.readAsDataURL(input.files[0]);
        }
    });

});
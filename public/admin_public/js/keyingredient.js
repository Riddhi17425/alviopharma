(function () {
    function slugify(value) {
        return value
            .toString()
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    }

    function initKeyIngredientForm(form) {
        var titleInput = form.querySelector('[data-keyingredient-title]');
        var urlInput = form.querySelector('[data-keyingredient-url]');
        var imageInput = form.querySelector('[data-keyingredient-image]');
        var imagePreview = form.querySelector('[data-keyingredient-preview]');
        var descriptionInput = form.querySelector('[data-keyingredient-description]');

        if (!titleInput || !urlInput || !imageInput || !imagePreview) {
            return;
        }

        if (descriptionInput && window.jQuery && typeof window.jQuery.fn.summernote === 'function') {
            window.jQuery(descriptionInput).summernote({
                placeholder: 'Enter Key Ingredient Description here...',
                height: 250,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ]
            });
        }

        var initialSlug = slugify(titleInput.value || '');
        var urlTouched = urlInput.value.trim() !== '' && urlInput.value !== initialSlug;

        titleInput.addEventListener('input', function () {
            if (!urlTouched) {
                urlInput.value = slugify(titleInput.value);
            }
        });

        urlInput.addEventListener('input', function () {
            urlTouched = urlInput.value.trim() !== '';
            urlInput.value = slugify(urlInput.value);
        });

        imageInput.addEventListener('change', function (event) {
            var file = event.target.files[0];

            if (!file) {
                if (!imagePreview.dataset.hasImage) {
                    imagePreview.style.display = 'none';
                    imagePreview.removeAttribute('src');
                }
                return;
            }

            var reader = new FileReader();
            reader.onload = function (loadEvent) {
                imagePreview.src = loadEvent.target.result;
                imagePreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        var forms = document.querySelectorAll('[data-keyingredient-form]');

        forms.forEach(function (form) {
            initKeyIngredientForm(form);
        });
    });
})();
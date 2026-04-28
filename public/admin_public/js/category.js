(function () {
    console.log("dsfdsfd")
    function slugify(value) {
        return value
            .toString()
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    }

    function initcategoryForm(form) {
        var titleInput = form.querySelector('[data-category-title]');
        var urlInput = form.querySelector('[data-category-url]');

        

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

        
    }

    document.addEventListener('DOMContentLoaded', function () {
        var forms = document.querySelectorAll('[data-category-form]');

        forms.forEach(function (form) {
            initcategoryForm(form);
        });
    });
})();
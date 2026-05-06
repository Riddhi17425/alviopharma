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

    function initproductsForm(form) {
        var titleInput = form.querySelector('[data-products-name]');
        var urlInput = form.querySelector('[data-products-url]');
        var metaTitle = form.querySelector('[data-products-meta-title]');

        

        var initialSlug = slugify(titleInput.value || '');
        var urlTouched = urlInput.value.trim() !== '' && urlInput.value !== initialSlug;
         

        titleInput.addEventListener('input', function () {
            if (!urlTouched) {
                urlInput.value = slugify(titleInput.value);
                metaTitle.value = titleInput.value;
            }
        });

        urlInput.addEventListener('input', function () {
            urlTouched = urlInput.value.trim() !== '';
            urlInput.value = slugify(urlInput.value);
        });

        
    }

    document.addEventListener('DOMContentLoaded', function () {
        var forms = document.querySelectorAll('[data-products-form]');

        forms.forEach(function (form) {
            initproductsForm(form);
        });
    });
})();


document.addEventListener("DOMContentLoaded", function () {

    // FRONT IMAGE PREVIEW
    const frontInput = document.getElementById("front_image");
    const frontPreview = document.getElementById("front_image_preview");

    if (frontInput) {
        frontInput.addEventListener("change", function (e) {
            const file = e.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (event) {
                    frontPreview.src = event.target.result;
                    frontPreview.style.display = "block";
                };

                reader.readAsDataURL(file);
            }
        });
    }

    // DETAIL IMAGES PREVIEW (MULTIPLE)
    const detailInput = document.getElementById("detail_images");
    const detailPreview = document.getElementById("detail_images_preview");

    if (detailInput) {
        detailInput.addEventListener("change", function (e) {

            detailPreview.innerHTML = ""; // clear old preview

            const files = e.target.files;

            if (files.length > 0) {
                Array.from(files).forEach(file => {

                    const reader = new FileReader();

                    reader.onload = function (event) {
                        const img = document.createElement("img");
                        img.src = event.target.result;
                        img.style.maxWidth = "100px";
                        img.style.marginRight = "10px";

                        detailPreview.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                });
            }
        });
    }

});



    


    //// key ingreadiants code start heaer
    document.addEventListener("DOMContentLoaded", function () {

        let wrapper = document.getElementById("ingredients-wrapper");

        if (!wrapper) return;

        // 🔢 Get last index (important for edit mode)
        let items = wrapper.querySelectorAll('.ingredient-item');
        let index = items.length;

        function initSummernote(element) {
            if (!element) return;

            // جلوگیری double init
            if ($(element).next('.note-editor').length) return;

            $(element).summernote({
                height: 200,
                placeholder: 'Enter Description...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline']],
                    ['para', ['ul', 'ol']],
                    ['insert', ['link', 'picture']],
                    ['view', ['codeview']]
                ]
            });
        }

        // ✅ INIT ALL EXISTING (Edit mode support)
        wrapper.querySelectorAll('.summernote').forEach(function (el) {
            initSummernote(el);
        });

        // ➕ ADD MORE
        document.getElementById("add-ingredient").addEventListener("click", function () {

            let html = `
                <div class="ingredient-item mb-4 border p-3 rounded">
                    
                    <div class="col-md-12 mb-2">
                        <input type="text" name="ingredients[${index}][title]" 
                            class="form-control" placeholder="Ingredient Title">
                    </div>

                    <div class="col-md-12 mb-2">
                        <textarea name="ingredients[${index}][description]" 
                            class="form-control summernote"></textarea>
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-danger remove-ingredient">Remove</button>
                    </div>

                </div>
            `;

            wrapper.insertAdjacentHTML("beforeend", html);

            let newItem = wrapper.lastElementChild;
            let textarea = newItem.querySelector('.summernote');

            initSummernote(textarea);

            index++;
        });

        // ❌ REMOVE
        document.addEventListener("click", function (e) {
            if (e.target.classList.contains("remove-ingredient")) {

                let item = e.target.closest(".ingredient-item");

                // destroy summernote safely
                let editor = item.querySelector('.summernote');
                if (editor && $(editor).next('.note-editor').length) {
                    $(editor).summernote('destroy');
                }

                item.remove();
            }
        });

    });
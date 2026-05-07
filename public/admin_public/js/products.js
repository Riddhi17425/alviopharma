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

    let index = wrapper.querySelectorAll('.ingredient-item').length;

    // INIT SUMMERNOTE
    function initSummernote(el) {
        if (!el) return;
        if ($(el).next('.note-editor').length) return;

        $(el).summernote({
            height: 180
        });
    }

    wrapper.querySelectorAll('.summernote').forEach(initSummernote);

    // IMAGE PREVIEW
    function bindImage(input) {
        input.addEventListener('change', function () {
            let file = this.files[0];
            let preview = this.closest('.ingredient-item').querySelector('.img-preview');

            if (file) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    }

    wrapper.querySelectorAll('.ingredient-image').forEach(bindImage);

    // ADD NEW ROW
    document.getElementById("add-ingredient").addEventListener("click", function () {

        let html = `
        <div class="ingredient-item mb-4 border p-3 rounded">

            <input type="text"
                name="ingredients[${index}][title]"
                class="form-control mb-2"
                placeholder="Ingredient Title">

            <textarea name="ingredients[${index}][description]"
                class="form-control summernote mb-2"></textarea>

            <input type="file"
                name="ingredients[${index}][image]"
                class="form-control ingredient-image mb-2 mt-3">

            <img class="img-preview"
                style="max-width:120px; display:none; margin-top:10px;">

            <div class="text-end mt-2">
                <button type="button" class="btn btn-danger remove-ingredient">
                    Remove
                </button>
            </div>

        </div>`;

        wrapper.insertAdjacentHTML("beforeend", html);

        let newItem = wrapper.lastElementChild;

        initSummernote(newItem.querySelector('.summernote'));
        bindImage(newItem.querySelector('.ingredient-image'));

        index++;
    });

    // REMOVE ITEM
    document.addEventListener("click", function (e) {
        if (e.target.classList.contains("remove-ingredient")) {
            let item = e.target.closest(".ingredient-item");

            let editor = item.querySelector('.summernote');
            if (editor && $(editor).next('.note-editor').length) {
                $(editor).summernote('destroy');
            }

            item.remove();
        }
    });

});
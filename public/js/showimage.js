window.addEventListener('load', function() {
    document.querySelector('input[type="file"]').addEventListener('change', function() {
        if (this.files && this.files[0]) {
            var img = document.querySelector('#Picture_small_URL');
            img.onload = () => {
                URL.revokeObjectURL(img.src);
            }

            img.src = URL.createObjectURL(this.files[0]);
        }
    });
  });
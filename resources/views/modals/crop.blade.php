    <div class="modal" style="display: block;" id="skills" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="min-width: auto !important;">
                <div class="modal-header">

                </div>
                <div class="modal-body">
                    <div class="res-cont">
                        <img src="{{ asset('thumbnails') . '/' . Auth::user()->image_name }}" alt="" id="cropper">
                        <button class="formBtn" id="sureto" type="submit" onclick="cropImage()">Ajouter</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>

        var cropParams;

        var croppr = new Croppr('#cropper', {
            aspectRatio : 1,
            minSize: [145, 145],
            onInitialize: (data) => { cropParams = data; },
            onCropStart: (data) => { cropParams = data; },
            onCropEnd: (data) => { cropParams = data; },
        });

        function cropImage() {
            location.href = '/{{ Auth::user()->role() }}/crop/' + cropParams.x + '/' + cropParams.y + '/' + cropParams.width + '/' + cropParams.height;
        }

    </script>

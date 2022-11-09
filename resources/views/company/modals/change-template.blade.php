<script>
    var template = {{ $settings->template }};
</script>
<div class="modal fade" id="changerTemplate" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-header">
                <h4 class="modal-title blue-title">Etes vous sure de vouloir changer le template?</h4>
            </div>
            <div class="modal-footer">
                <button class="formBtn" type="submit" onclick="location.href = '/company/changeTemplate/' + template">Oui</button>
                <button type="button" class="formBtn but-white" data-dismiss="modal">Annuler</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="template" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title blue-title">Changer le template</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    @for($i = 1; $i <= 4; $i++)
                        <div class="col-md-3">
                            <div class="wraper">
                                <div class="wrapper-img">
                                    <img class="img-responsive change-template-image" src="/img/template{{ $i }}.jpg">
                                </div>
                                <div class="wrapper-text" style="padding-bottom: 45px;">
                                    <div class="wrapper-text-left">
                                        <h6>statut: <span style="color: {{ $settings->template == $i ? 'green' : 'red' }}">{{ $settings->template == $i ? 'actif' : 'inactif' }}</span></h6>
                                    </div>
                                </div>
                                <div class="wrapper-button">
                                    <a class="details-btn" id="template-img1" onclick=" template = {{ $i }}; zoom_image('/img/template{{ $i }}.jpg', 'template{{ $i }}');">Details</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
           {{-- <div class="modal-footer">
                <form action="#" id="template-img">
                    <button class="formBtn" type="submit">Oui</button>
                </form>
            </div>--}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="display-image">
    <div class="display-image-wrapper">
        <div class="display-button">
            <img class="img-responsive" src=""/>
            <a class="display-close close" onclick="zoom_image_hide();">&times;</a>
            <div class="display-form">
                <a class="Btnform" onclick="change_template(this);" data-template="">Utiliser ce template</a>
            </div>

        </div>

    </div>
</div>

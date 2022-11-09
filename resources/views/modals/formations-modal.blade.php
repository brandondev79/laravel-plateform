<div class="modal {{ isset($edit) ? 'nofade' : 'fade' }}" id="formation" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" @if(isset($edit)) onclick="location.href='{{  Auth::user()->role() }}/formations'" @endif><span aria-hidden="true">&times;</span></button>
            <div class="modal-header">

                <h4 class="modal-title blue-title">Ajouter une Formation</h4>
            </div>
            <div class="modal-body">
                <form  action="/{{  Auth::user()->role() }}/{{ isset($edit) ? 'formations/' . $form->id . '/edit' : 'formations' }}" method="post">
                    @if(isset($edit)) {{ method_field('PUT') }} @endif
                    {{ csrf_field() }}
                    <div class="modal-marger">
                        <select name="type" required onchange="$('input[name=formation_name]').attr('placeholder', $(this).val() == 1 ? 'Nom de la certification' : 'Nom de la formation')">
                            <option value="1" {{ isset($edit) && $form->type == 1 ? 'selected' : '' }}>Certification</option>
                            <option value="2" {{ isset($edit) && $form->type == 2 ? 'selected' : '' }}>Formation</option>
                        </select>
                        <select name="year" required>
                            @for($y = date('Y'); $y >= 1960; $y--)
                                <option value="{{ $y }}"  {{ isset($edit) && $form->year == $y ? 'selected' : '' }}>{{ $y }}</option>
                            @endfor
                        </select>
                        <input placeholder="Nom de l'établissement" type="text"  @if(isset($edit)) value="{{ $form->name }}" @endif  name="facility_name" required>
                        <input placeholder="Nom de la certification" type="text"  @if(isset($edit)) value="{{ $form->name }}" @endif  name="formation_name" required>
                        <p class="span-style"><span>*</span> Champs obligatories</p>
                        <button class="formBtn" type="submit">{{ isset($edit) ? 'modifier' : 'Ajouter' }}</button>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

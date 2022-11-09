<div class="modal {{ isset($edit) ? 'nofade' : 'fade' }}" id="mission" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" @if(isset($edit)) onclick="location.href='{{  Auth::user()->role() }}/missions'" @endif><span aria-hidden="true">&times;</span></button>
            <div class="modal-header">

                <h4 class="modal-title blue-title">Ajouter une mission</h4>
            </div>
            <div class="modal-body">
                <form  action="/{{ Auth::user()->role() }}/{{ isset($edit) ? 'missions/' . $miss->id . '/edit' : 'missions' }}" method="post">
                   @if(isset($edit)) {{ method_field('PUT') }} @endif
                    {{ csrf_field() }}
                    <div class="modal-marger">
                        <input placeholder="Client *" type="text" name="customer"  @if(isset($edit)) value="{{ $miss->customer }}" @endif required />
                        <input placeholder="Periode début *" type="date"  @if(isset($edit)) value="{{ $miss->period_start }}" @endif name="period_start" required />
                        <input placeholder="Periode fin *" type="date"  @if(isset($edit)) value="{{ $miss->period_end }}" @endif name="period_end" required />
                        <input placeholder="Poste *" type="text" name="position"  @if(isset($edit)) value="{{ $miss->position }}" @endif required />
                        <textarea placeholder="Description *" type="text" name="description" required>@if(isset($edit)){{ $miss->description }}@endif</textarea>
                        <input placeholder="Environment *" type="text" name="environment"  @if(isset($edit)) value="{{ $miss->environment }}" @endif required />
                        <p class="span-style"><span>*</span> Champs obligatories</p>
                        <button class="formBtn" type="submit">{{ isset($edit) ? 'modifier' : 'Ajouter' }}</button>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal {{ isset($edit) ? 'nofade' : 'fade' }}" id="add-mission" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-rounded modal-content-shadow">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" @if(isset($edit)) onclick="location.href='/{{  Auth::user()->role() }}/missions'" @endif><span aria-hidden="true">&times;</span></button>
                <div class="profile-sec">
                    <p class="profile-title">Ajouter une mission</p>
                </div>
                <div class="modal-info">
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
                            <button class="mr-lf-120 modal-btn-mb btn btn-violet btn-sm btn-rounded-2x" type="submit">{{ isset($edit) ? 'modifier' : 'Ajouter' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
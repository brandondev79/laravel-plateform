<div class="modal fade" id="profil" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="res-cont">
                    <form action="admin/addUser" method="post" id="contactForm">
                        {{ csrf_field() }}
                        <input placeholder="Name *" type="text" name="name" required />
                        <input placeholder="Prenom *" type="text" name="last_name" required />
                        <input placeholder="Email *" type="email" name="email" required />
                        <input placeholder="Phone *" type="text" name="phone" id="salesPhone" style="display: none" />
                        {{--<input placeholder="Password *" type="password" name="password" required />
                        <input placeholder="Password Confirmation *" type="password" name="password_confirmation" required />--}}
                        <label class="label-style" value="Type *" for="type" required />
                        <select id="type" name="type" class="form-control" onchange="if($(this).val() == 2) $('#salesPhone').show(); else $('#salesPhone').hide()">
                            <option value="1">Colaborateur</option>
                            <option value="2">Commerciale</option>
                            <option value="3">Admin</option>
                        </select>
                        <p class="span-style"><span>*</span> Champs obligatories</p>
                        <button class="formBtn" id="sureto" type="submit">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

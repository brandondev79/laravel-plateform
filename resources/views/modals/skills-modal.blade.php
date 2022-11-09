<div class="modal fade" id="skills" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-header">

                <h4 class="modal-title blue-title">Ajouter une nouvelle compétence</h4>
            </div>
            <div class="modal-body">
                <form action="/{{ Auth::user()->role() }}/skills/add" method="post">
                    {{ csrf_field() }}
                    <div class="modal-marger">
                        <span class="note">
                            si vous ajoutez une compétence à une catégorie existante, veuillez en choisir une dans la liste, sinon entrez le nouveau nom de la catégorie.
                        </span>
                        <select name="category" onchange="$(this).val() == '0' ? $('#newCatName').show() : $('#newCatName').hide() ">
                            <option value="0">Catégorie</option>
                            @foreach($skillsCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>

                        <input placeholder="nouveau nom de catégorie" type="text" name="newCatName" id="newCatName" />
                        <input placeholder="nom de la compétence" type="text" name="skillName" id="skillName" required />
                        <p class="span-style"><span>*</span> Champs obligatories</p>
                        <button class="formBtn" type="submit">Ajouter</button>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

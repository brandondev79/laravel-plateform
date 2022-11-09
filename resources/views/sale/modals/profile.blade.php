<!-- Modal -->
<div class="modal modal-profile fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-rounded modal-content-shadow">
            <div class="modal-body">
                <div class="close float-right">
                    <a class="close-modal text-11 text-gray" href="javascript:void(0)" data-dismiss="modal">Fermer</a>
                </div>
                <div class="profile-thumbnail">
                    <img src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                </div>
                <div class="profile-sec">
                    <p class="profile-title">Chérif Kassouri</p>
                </div>
                <div class="info-sec">
                    <p class="profile-description">Développeur Full Stack</p>
                </div>
                <div class="modal-info">
                    <div class="row mb-3">
                        <div class="col text-right">
                            <p>Type de profil</p>
                        </div>
                        <div class="col">
                            <p>
                                <span class="badge badge-pill badge-long badge-theme-azure-03 text-black profile-role">Employés</span>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col text-right">
                            <p>Nom complet</p>
                        </div>
                        <div class="col">
                            <p class="text-gray profile-full-name">Chérit Kassouri</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col text-right">
                            <p>Années d'xp</p>
                        </div>
                        <div class="col">
                            <p class="text-gray profile-year-of-experience">9</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col text-right">
                            <p>Adresse email</p>
                        </div>
                        <div class="col">
                            <p class="text-gray profile-email">prenom.nom@gmail.com</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col text-right">
                            <p>CV actualisé</p>
                        </div>
                        <div class="col">
                            <p class="text-gray profile-last-view-cv">II y a 23 jours</p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-violet btn-sm btn-rounded-2x w-75 mb-4 profile-download-this-resume">
                    Téle1charger le CV
                </button>
                <button class="btn btn-grey btn-sm btn-rounded-2x w-75 profile-download-anonymous-resume">
                    Télécharger le CV anonyme
                </button>
            </div>
        </div>
    </div>
</div>
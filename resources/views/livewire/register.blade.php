<div class="form">
    <form wire:submit.prevent="submit">
        @csrf
            <label for="name">Nom:
                <input wire:model.debounce.500ms="firstname" class="style" type="text" name="name" id="name" placeholder="Votre Nom...">
                @error('firstname') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
            </label>

            <label for="family_name">Prénom:
                <input wire:model.debounce.500ms="lastname" class="style" type="text" name="family_name" id="family_name" placeholder="Votre Prénom...">
                @error('lastname') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
            </label>

            <label for="birthdate">Date de naissance:
                <input wire:model.debounce.500ms="birthday" class="style" type="date" name="birthdate" id="birthdate" max="2005-01-01">
                @error('birthday') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
            </label>

            <label for="email">E-mail Adress:
                <input wire:model.debounce.500ms="email" class="style" type="email" name="email" id="email" placeholder="Votre adresse mail...">
                @error('email') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
            </label>

            <label for="phone">Numéro de telephone:
                <input wire:model.debounce.500ms="phone" class="style" type="text" name="phone" id="phone" placeholder="Votre numéro...">
                @error('phone') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
            </label>

            <!--<label for="UNI">Votre Université:-->
            <!--    <input wire:model.debounce.500ms="university" class="style" type="text" name="Université" id="UNI" placeholder="Université...">-->
            <!--    @error('university') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror-->
            <!--</label>-->

            <div class="level">
                <p>Niveau d'Etude:</p>
                @error('study_year') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
                <div class="option">
                    <input wire:model.defer="study_year" type="radio" id="L1" name="Niveau d'Etude" value="L1">
                    <label for="L1">L1</label>
                </div>

                <div class="option">
                    <input wire:model.defer="study_year" type="radio" id="L2" name="Niveau d'Etude" value="L2">
                    <label for="L2">L2</label>
                </div>

                <div class="option">
                    <input wire:model.defer="study_year" type="radio" id="L3" name="Niveau d'Etude" value="L3">
                    <label for="L3">L3</label>
                </div>

                <div class="option">
                    <input wire:model.defer="study_year" type="radio" id="M1" name="Niveau d'Etude" value="M1">
                    <label for="M1">M1</label>
                </div>

                <div class="option">
                    <input wire:model.defer="study_year" type="radio" id="M2" name="Niveau d'Etude" value="M2">
                    <label for="M2">M2</label>
                </div>
            </div>

            <label for="domain">Spécialité:
                <input wire:model.debounce.500ms="study_field" class="style" type="text" name="domain" id="domain" placeholder="Votre spécialité...">
                 @error('study_field') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
            </label>

            <label for="motivation">Motivation
                <textarea wire:model.debounce.500ms="motivation"class="style" name="mativation" id="motivation"></textarea>
                @error('motivation') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
            </label>
            <div class="skills">
                <p>Compétences:</p>
                @error('comptence') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
                <label class="checkbox" for="Développement-Web">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="Développement-Web" name="skills" value="web-dev">
                    <div class="checkbox__box"></div>
                    Développement Web
                </label>
                <br>
                <label class="checkbox" for="Design">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="Design" name="skills" value="design">
                    <div class="checkbox__box"></div>
                    Design
                </label>
                <br>
                <label class="checkbox" for="C++">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="C++" name="skills" value="C++">
                    <div class="checkbox__box"></div>
                    C++
                </label>
                <br>
                <label class="checkbox" for="Python">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="Python" name="skills" value="python">
                    <div class="checkbox__box"></div>
                    Python
                </label>
                <br>
                <label class="checkbox" for="Arduino">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="Arduino" name="skills" value="arduino">
                    <div class="checkbox__box"></div>
                    Arduino
                </label>
                <br>
                <label class="checkbox" for="MikroC">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="MikroC" name="skills" value="MikroC">
                    <div class="checkbox__box"></div>
                    MikroC
                </label>
                <br>
                <label class="checkbox" for="Raspberry">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="Raspberry" name="skills" value="raspberry">
                    <div class="checkbox__box"></div>
                    Raspberry
                </label>
                <br>
                <label class="checkbox" for="Matllab">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="Matllab" name="skills" value="Matllab">
                    <div class="checkbox__box"></div>
                    Matllab
                </label>
                <br>
                <label class="checkbox" for="HTML">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="HTML" name="skills" value="HTML">
                    <div class="checkbox__box"></div>
                    HTML
                </label>
                <br>
                <label class="checkbox" for="CSS">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="CSS" name="skills" value="CSS">
                    <div class="checkbox__box"></div>
                    CSS
                </label>
                <br>
                <label class="checkbox" for="Proteus">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="Proteus" name="skills" value="proteus">
                    <div class="checkbox__box"></div>
                    Proteus
                </label>
                <br>
                <label class="checkbox" for="Sprint-Layout">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="Sprint-Layout" name="skills" value="Sprint-Layout">
                    <div class="checkbox__box"></div>
                    Sprint Layout
                </label>
                <br>
                <label class="checkbox" for="Eagle">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="Eagle" name="skills" value="eagle">
                    <div class="checkbox__box"></div>
                    Eagle
                </label>
                <br>
                <label class="checkbox" for="MPLAB">
                    <input wire:model.defer="comptence" class="checkbox__input" type="checkbox" id="MPLAB" name="skills" value="MPLAB">
                    <div class="checkbox__box"></div>
                    MPLAB
                </label>

                <div class="other">
                    <input wire:model.debounce.500ms="other" class="style" type="text" name="other" placeholder="Autre...">
                </div>

            </div>

            <label for="celec">Comment avez-vous connu le club CELEC?
                <input wire:model.debounce.500ms="knowing_the_club"  class="style" type="text" name="Comment avez-vous connu le club CELEC?" id="celec" placeholder="Votre réponse...">
                 @error('knowing_the_club') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
            </label>

            <label for="linkedIn">LinkedIn Profile: (URL)
                <input wire:model.debounce.500ms="linked_in" class="style" type="text" name="linkediIn" id="linkedIn" placeholder="Votre réponse...">
                @error('linked_in') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
            </label>

            <div class="CV">
                <p>Votre CV</p>

                <input wire:model="cv" type="file" id="real-file" hidden>
                <button type="button" id="custom-button">Choisir un document</button>
                @if(is_null($cv))
                    <span id="custom-text">Aucun document sélectionné. (Extensions autorisées: pdf, doc.)</span>
                @endif
                @if($cv AND !$errors->has("cv"))
                    <strong wire:loading.remove wire:target="cv"><span style="color: #67f58d;">uploaded</span></strong>
                @endif
                <div class="invalid-feedback" wire:loading wire:target="cv">Uploading...</div>
                @error('cv') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
            </div>

            <button class="B1" type="submit" wire:target="submit" wire:loading.remove>Submit</button>
            <button class="B2" type="reset" wire:target="submit" wire:loading.remove>Reset</button>
            <div wire:loading wire:target="submit" style="margin-top: 5%;">
                <strong>Enregistrement...</strong>
            </div>
    </form>
</div>
@push("scripts")
    <script type="text/javascript">
        window.addEventListener('birthday-error', event => {
            Swal.fire({
              title: 'Error!',
              text: event.detail.message,
              icon: 'error',
              confirmButtonText: 'Cool'
            });
        });

        window.addEventListener('user-created', event => {
            Swal.fire(
              'Amazing!',
              event.detail.message,
              'success'
            ).then((result) => {
                  if (result.isConfirmed) {
                        window.location.replace("{{url('/')}}");
                  }
            });
        });
    </script>
@endpush
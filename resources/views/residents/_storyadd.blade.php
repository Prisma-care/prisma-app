<div class="modal fade story-add" tabindex="-1" role="dialog" id="addStoryModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title pt-1 mt-0">Voeg verhaal toe</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="">

          <div class="media">
            <img class="mr-3 rounded-circle" src="" alt="">
            <div class="media-body">
              <textarea v-model="newStory" class="form-control" type="text" ref="storytext" placeholder="Vertel het verhaal" rows="3" autofocus></textarea>
            </div>
          </div>

          <div class="story-add-photopreview mt-4" v-if="previewType == 'photo'">
            <div class="card">
              <img src="https://dl.airtable.com/lgjowoSwRAK78EhTLmlO_full_frogsongband.jpg" alt="" class="card-img" width="120" height="90">
              <div class="card-img-overlay text-right p-1">
                <a href="#"  @click="hideMedia" class="close text-white">×</a>
              </div>
            </div>
          </div>

          <div class="story-add-videoadd mt-4" v-if="previewType == 'video'">
            <div class="form-group">
              <input id="youtubeUrl" v-model="youtubeUrl" @input="addYoutube" class="form-control" type="text" placeholder="https://www.youtube.com/watch?v=ffSnk4v3aeg">
              <label for="youtubeUrl">Youtube link:</label>
            </div>
            <div class="story-add-videoadd-preview" v-if="videoAdded">
              <div class="card">
                <img src="https://placeimg.com/120/90" alt="" class="card-img">
                <div class="card-img-overlay text-right p-1">
                  <a href="#" @click="hideMedia" class="close text-white">×</a>
                </div>
              </div>
            </div>

          </div>


          <div class="story-add-media d-flex justify-content-start mb-4" v-if="! previewType">
            <button onclick="return false" class="btn btn-light btn-sm d-flex align-items-center mr-2" v-on:click="showMediaPreview('photo')"><i class="material-icons mr-2">camera_alt</i> Foto</button> 
            <button onclick="return false" class="btn btn-light btn-sm d-flex align-items-center" v-on:click="showMediaPreview('video')"><i class="material-icons mr-2">movie</i> Video</button>
          </div>

          <div class="form-group mb-0">           
            <select class="form-control" v-model="newAlbum">
              <option value="">Kies album</option>
              <option>Familie en vrienden</option>
              <option>Gewoonten en tradities</option>
              <option>Muziek</option>
              <option>Vrije tijd</option>
              <option>School en werk</option>
              <option>Spel en hobbies</option>
              <option>Sport</option>
            </select>
          </div>

        </form>
      </div>
      <div class="modal-footer">
       <button class="btn btn-primary btn-block" type="submit" :disabled="isValid">Voeg toe</button>
     </div>
   </div>
 </div>
</div>
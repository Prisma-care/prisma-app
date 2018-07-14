<div 
v-if="story['fields']['type']=='image' || story['fields']['type']=='youtube'"
class="card d-flex align-self-center">

<img class="card-img" :src="story['fields']['thumbnail']" alt="" v-if="story['fields']['thumbnail']">

<span class="story-year badge badge-dark" v-if="story['fields']['Year']">@{{ story['fields']['Year'] }}</span>

<button
@click="index = story['fields']['index']"
v-if="story['fields']['type']=='youtube'"
class="btn btn-play d-flex btn-primary justify-content-center align-items-center">
<i class="material-icons md-32 mx-auto">play_arrow</i>
</button>

<button
@click="index = story['fields']['index']"
v-if="story['fields']['type']=='image'"
class="btn btn-zoom d-flex btn-primary justify-content-center align-items-center" >
<i class="material-icons md-32 mx-auto">zoom_out_map</i>
</button>

<div class="card-img-overlay">
  <input type="checkbox" :id="story.id" :value="story.id" v-model="checkedStories" class="checkbox" number> 
  <label class="form-check-label" :for="story.id"><i class="material-icons mr-2 md-24">print</i> Selecteer</label>

  <button 
  data-toggle="modal"
  data-target="#editStoryModal" 
  class="btn btn-link btn-sm px-0 d-flex align-items-center btn-edit">
  <i class="material-icons md-18">edit</i> <span>Bewerk</span>
</button>

</div>
</div>

<p 
v-if="story['fields']['type']=='image' || story['fields']['type']=='youtube'"
class="mt-3">@{{ story['fields']['Notes'] }}</p>

<div class="card card_text" v-if="story['fields']['type']=='text'">

  <div class="card-body">
    @{{ story['fields']['Notes'] }}
  </div>

  <div class="card-img-overlay text-right">
    <button 
    data-toggle="modal"
    data-target="#editStoryModal" 
    class="btn btn-link btn-sm px-0 btn-edit">
    <i class="material-icons md-18 mr-2">edit</i> <span>Pas tekst aan</span>
  </button>
</div>
</div>

{{-- CTA's --}}
<div v-if="story['fields']['Notes'] && !story['fields']['thumbnail']">
  <button
  data-toggle="modal"
  data-target="#editStoryModal"
  class="btn btn-add d-flex justify-content-center align-items-center mb-2">
  <i class="material-icons md-18 mr-2">add_photo_alternate</i> <span>Voeg beeld toe <em>TODO</em></span>
</button>
</div>

<div v-if="story['fields']['Notes']">
  <button
  data-toggle="modal"
  data-target="#editStoryModal"
  class="btn btn-edit d-flex justify-content-center align-items-center">
  <i class="material-icons md-18 mr-2">edit</i> <span>Pas tekst aan</span>
</button>
</div>

<div v-if="!story['fields']['Notes']">
  <button
  data-toggle="modal"
  data-target="#editStoryModal"
  class="btn btn-add d-flex justify-content-center align-items-center">
  <i class="material-icons md-18 mr-2">edit</i> <span>Voeg tekst toe</span>
</button>
</div>
<div 
v-if="story['fields']['type']=='image' || story['fields']['type']=='youtube'"
class="card">

<img class="card-img" :src="story['fields']['thumbnail']" alt="" v-if="story['fields']['thumbnail']">
<div class="card-img-overlay">
  <input type="checkbox" :id="story.id" :value="story.id" v-model="checkedStories" class="checkbox" number>

  <button
  @click="index = story['fields']['index']"
  class="btn-zoom d-flex mx-auto btn btn-link" >
  <i class="material-icons md-48 mx-auto">zoom_in</i>
</button>

<button 
data-toggle="modal"
data-target="#editStoryModal" 
class="btn btn-link btn-sm px-0 d-flex align-items-center btn-edit">
<i class="material-icons md-18">edit</i> <span>Bewerk tekst</span>
</button>

</div>
</div>
<p 
v-if="story['fields']['type']=='image' || story['fields']['type']=='youtube'"
class="mt-3 mb-5 ">@{{ story['fields']['Notes'] }}</p>

<div class="card card_text" v-if="story['fields']['type']=='text'">

  <div class="card-body">
    @{{ story['fields']['Notes'] }}
  </div>

  <div class="card-img-overlay text-right">
    <button 
      data-toggle="modal"
      data-target="#editStoryModal" 
      class="btn btn-link btn-sm px-0 btn-edit">
      <i class="material-icons md-18">edit</i> <span>Bewerk tekst</span>
    </button>
  </div>
</div>

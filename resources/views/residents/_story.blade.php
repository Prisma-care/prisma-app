<div 
v-if="story['fields']['type']=='image' || story['fields']['type']=='youtube'"
class="card">

  <img class="card-img" :src="story['fields']['thumbnail']" alt="" v-if="story['fields']['thumbnail']">
  <div class="card-img-overlay">
    <div class="d-flex justify-content-between align-items-center">
    <input type="checkbox" :id="story.id" :value="story.id" v-model="checkedStories" class="checkbox" number>
    <button class="btn btn-link btn-sm px-0">Bewerk</button>
    </div>

    <button
    @click="index = story['fields']['index']"
    class="btn-zoom d-flex mx-auto btn btn-link" >
    <i class="material-icons md-48 mx-auto">zoom_in</i>
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

  <div class="card-img-overlay">

  </div>
</div>

<div class="card">
  <img class="card-img" :src="story['fields']['thumbnail']" alt="" v-if="story['fields']['thumbnail']">
  <div class="card-img-overlay">
    <input type="checkbox" :id="story.id" :value="story.id" v-model="checkedStories" class="checkbox" number>

    <button
      @click="index = story['fields']['index']"
      class="d-flex mx-auto mt-5 btn btn-link" >
      <i class="material-icons md-48">zoom_in</i>
    </button>

  </div>
</div>
<p class="mt-3 mb-5">@{{ story['fields']['Notes'] }}</p>
<div class="modal fade story-edit" tabindex="-1" role="dialog" id="editStoryModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title pt-1 mt-0">Bewerk tekst</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="">
          <textarea v-model="newStory" class="form-control" type="text" ref="storytext" placeholder="Vertel het verhaal" rows="3" autofocus></textarea>
        </form>
      </div>
      <div class="modal-footer">
       <button class="btn btn-primary btn-block" type="submit" :disabled="isValid">Bewerk tekst</button>
     </div>
   </div>
 </div>
</div>
<?php 
    function alertAction($value, $type){
        return '<div style="position: absolute; right: 0; top: 0;">
        <div class="toast show align-items-center text-white bg-'.$type.' border-0" role="alert" aria-live="assertive" aria-atomic="true" id="toast">
          <div class="d-flex">
            <div class="toast-body">'
              .$value.
            '</div>
            <!-- <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button> -->
          </div>
        </div>
      </div>';
    }

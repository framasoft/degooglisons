<?php
function modal($id, $title, $body, $footer = '', $lg = '') {
    $lg = !isset($lg) ? '' : ' modal-lg';
    $footer = !isset($footer) ? '' : '<div class="modal-footer">'.$footer.'</div>';
    $html =
    '<div class="modal fade" id="modal-'.$id.'" tabindex="-1" role="dialog" aria-labelledby="modal-'.$id.'Label" aria-hidden="true">
        <div class="modal-dialog'.$lg.'">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" title="Close"><i aria-hidden="true">&times;</i><span class="sr-only">Close</span></button>
                    <h1 id="modal-'.$id.'Label">'.$title.'</h1>
                </div>
                <div class="modal-body">'.$body.'</div>
                '.$footer.'
            </div>
        </div>
    </div>';
  return $html;
}
?>
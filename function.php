<?php


function modal($id, $title, $body, $footer = '', $lg = '') {
    $lg = ($lg == '') ? '' : ' modal-lg';
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

function t($string, $format = 'text') {
    switch ($format) {
        case 'text' :
            return strip_tags($string);
        break;
        case 'noframa' :
            $text = str_replace('framand','and',strtolower(strip_tags($string)));
            $text = str_replace('framage','age',$text);
            $text = str_replace('framae','mae',$text);
            $text = str_replace('framin','min',$text);
            $text = str_replace('frame','me',$text);
            $text = str_replace('frama','',$text);
            $text = str_replace('.','',$text);
            $text = str_replace('è','e',$text);
            $text = str_replace('é','e',$text);
            return $text;
        break;
        case 'l' :
            return strtolower(strip_tags($string));
        break;
        case 'U' :
            return strtoupper(strip_tags($string));
        break;
    }
}

/*function carousel( ) {

}*/

?>
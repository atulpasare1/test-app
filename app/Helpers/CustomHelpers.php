<?php

if (! function_exists('GetCardAction')) {
    /**
     * Format the date in a custom format.
     *
     * @param  string  $date
     * @return string
     */
    function GetCardAction()
    {
        return '<div class="card-action-element">
      <ul class="list-inline mb-0">
        <li class="list-inline-item">
          <a href="javascript:void(0);" class="card-collapsible"><i class="tf-icons ri-arrow-up-s-line"></i></a>
        </li>
       
        <li class="list-inline-item">
          <a href="javascript:void(0);" class="card-expand"><i class="tf-icons ri-fullscreen-line"></i></a>
        </li>
       
      </ul>
    </div>';
    }
}

if (! function_exists('customString')) {
    /**
     * Custom string manipulation function.
     *
     * @param  string  $string
     * @return string
     */
    function customString($string)
    {
        return strtoupper($string);
    }
}

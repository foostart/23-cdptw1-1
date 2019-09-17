
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/'.$pattern_document_root.'(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host.$matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
    <main class="cd-main-content">
            <div class="cd-filter">
                <form>
                    <div class="cd-filter-block">
                        <h4>Search</h4>
                        <div class="cd-filter-content">
                            <div class="cd-select cd-filters">
                                <input id="calculatorSlider" class="no-border" type="range" value="0" min="0" max="30" />
                                <!-- Grid row -->
                                <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6 text-center pb-5">

                                    <h2><span class="badge blue lighten-2 mb-4">You earn</span></h2>
                                    <h2 class="display-4" style="color:#0d47a1"><strong id="resellerEarnings">75$</strong></h2>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 text-center pb-5">

                                    <h2><span class="badge blue lighten-2 mb-4">Client pays</span></h2>
                                    <h2 class="display-4" style="color:#0d47a1"><strong id="clientPrice">319$</strong></h2>

                                </div>
                                <!-- Grid column -->

                                </div>
                            </div>
                        </div>   <!-- Grid row -->
                    </div> <!-- cd-filter-block -->
                    <div class="cd-filter-block">
                        <h4>Combo Product </h4>

                        <ul class="cd-filter-content cd-filters list">
                            <li>
                                <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                                <label class="checkbox-label" for="checkbox1">All Product</label>
                            </li>

                            <li>
                                <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                                <label class="checkbox-label" for="checkbox2">Combo 1</label>
                            </li>

                            <li>
                                <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                                <label class="checkbox-label" for="checkbox3">Combo 2</label>
                            </li>
                        </ul> <!-- cd-filter-content -->
                    </div> <!-- cd-filter-block -->

                    <div class="cd-filter-block">
                        <h4>Select</h4>
                        <div class="cd-filter-content">
                            <div class="cd-select cd-filters">
                                <select class="filter" name="selectThis" id="selectThis">    
                                    <option value="" selected="selected">Condition</option>
                                    <option value="certified-used"> Certified Used</option>
                                    <option value="new-cars">New</option>
                                    <option value="used-cars">Used</option>
                                </select>
                            </div> <!-- cd-select -->
                        </div> <!-- cd-filter-content -->
                    </div> <!-- cd-filter-block -->

                    <div class="cd-filter-block">
                        <h4>Radio buttons</h4>

                        <ul class="cd-filter-content cd-filters list">
                            <li>
                                <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
                                <label class="radio-label" for="radio1">All</label>
                            </li>

                            <li>
                                <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                                <label class="radio-label" for="radio2">Choice 1</label>
                            </li>

                            <li>
                                <input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
                                <label class="radio-label" for="radio3">Choice 2</label>
                            </li>
                        </ul> <!-- cd-filter-content -->
                    </div> <!-- cd-filter-block -->
                </form>

                <a href="#0" class="cd-close">Close</a>
            </div> <!-- cd-filter -->

            <a href="#0" class="cd-filter-trigger">Filters</a>
        </main> <!-- cd-main-content -->
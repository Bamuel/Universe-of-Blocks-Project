<?php
/**
 * Created by PhpStorm.
 * User: Bamuel
 * Date: 9/02/2016
 */
$menu = '
<div class="modal fade" id="menumodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <h4 class="modal-title" id="menumodalLabel">Game Menu</h4>
            </div>
            <div class="modal-body">
                <h2>Load a World(Disabled)</h2>
                <br>
                <br>
                <h2>Game Panels(Beta)</h2>
                <button id="hidden" type="button" class="btn btn-success" onclick="void(document.getElementById(\'gamepanel1\').style.visibility=\'hidden\')">Primary Panel</button>
                <button id="visible" type="button" class="btn btn-success" onclick="void(document.getElementById(\'gamepanel1\').style.visibility=\'visible\')">Second Panel</button>
                <br>
                <br>
                <h2>Weather</h2>
                <button id="rain_hidden" type="button" class="btn btn-success" onclick="void(document.getElementById(\'rain_panel\').style.visibility=\'hidden\')">Sun</button>
                <button id="rain_visible" type="button" class="btn btn-danger" onclick="void(document.getElementById(\'rain_panel\').style.visibility=\'visible\')">Rain</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
';
<?php
echo <<<SIDE
    <div class="sidebar-right">
        Search Menu <br>
        <label>by First Name</label>
        <form class="sidebar-search">
            <input type="text" id="input-search-field" class="input-field" placeholder="Enter name there..."/>
            <input type="button" class="waves-effect waves-light blue btn" value="Search" onclick="search()" />
        </form>
    </div>
    <div class="sidebar-left">
        Sort Menu <br>
        <label>click on any</label>
        <form class="sidebar-sort">
            <input type="button" class="waves-effect waves-light blue btn" onclick="location.reload()"  value="Ascending" />
            <input type="button" class="waves-effect waves-light blue btn" onclick="changeSortBy()" value="Descending" />
        </form>
    </div>
SIDE;

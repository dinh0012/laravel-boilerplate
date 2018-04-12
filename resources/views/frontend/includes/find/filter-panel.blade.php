
<div class="col-3 container-filter">
    <div class="search-filter">
        @foreach ($filterArray as $type => $filterGroup)
            <div class="filter-group">
            <div class="filter-group-header head-sm justify-content-between">
                <span class="header-filter">{{$filterGroup['name']}}</span>
                <span class="icon-expand-collapse">
                                        <i class="material-icons">remove</i>
                                    </span>
            </div>
            <div class="filter-group-body">
                @foreach ($filterGroup['items'] as $key => $item)
                    <div class="filter-item">
                    <label for="{{$type.$key}}" class="form-check-label">
                        <input type="checkbox" id="{{$type.$key}}" class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">{{$item}}</span>
                    </label>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
{{--
<div class="col-3 container-filter">
    <div class="search-filter">
        <div class="filter-group">
            <div class="filter-group-header head-sm justify-content-between">
                <span class="header-filter">Radius</span>
                <span class="icon-expand-collapse">
                                        <i class="material-icons">remove</i>
                                    </span>
            </div>
            <div class="filter-group-body">
                <div class="filter-item">
                    <label for="radius1" class="form-check-label">

                        <input type="checkbox" id="radius1" class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">< 5 km</span>
                    </label>
                </div>
                <div class="filter-item">
                    <label for="radius2" class="form-check-label">

                        <input type="checkbox" id="radius2" class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label"> 5 - 10 km</span>
                    </label>
                </div>
                <div class="filter-item">
                    <label for="radius3" class="form-check-label">
                        <input type="checkbox" id="radius3" class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label"> 10 - 15 km</span>
                    </label>
                </div>
                <div class="filter-item">
                    <label for="radius4" class="form-check-label">
                        <input type="checkbox" id="radius4" class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">> 15 km</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="filter-group">
            <div class="filter-group-header head-sm justify-content-between">
                <span class="header-filter">shared housing</span>
                <span class="icon-expand-collapse">
                                        <i class="material-icons">remove</i>
                                    </span>
            </div>
            <div class="filter-group-body">
                <div class="filter-item">
                    <label for="sharedhousing1" class="form-check-label">
                        <input type="checkbox" id="sharedhousing1"
                               class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">Yes</span>
                    </label>
                </div>
                <div class="filter-item">
                    <label for="sharedhousing2" class="form-check-label">
                        <input type="checkbox" id="sharedhousing2"
                               class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label"> No</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="filter-group">
            <div class="filter-group-header head-sm justify-content-between">
                <span class="header-filter">capacity</span>
                <span class="icon-expand-collapse">
                                        <i class="material-icons">remove</i>
                                    </span>
            </div>
            <div class="filter-group-body">
                <div class="filter-item">
                    <label for="capacity1" class="form-check-label">
                        <input type="checkbox" id="capacity1"
                               class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">2 peoples</span>
                    </label>
                </div>
                <div class="filter-item">
                    <label for="capacity2" class="form-check-label">
                        <input type="checkbox" id="capacity2"
                               class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label"> 2 - 6 peoples</span>
                    </label>
                </div>
                <div class="filter-item">
                    <label for="capacity3" class="form-check-label">
                        <input type="checkbox" id="capacity3"
                               class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label"> > 6</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="filter-group">
            <div class="filter-group-header head-sm justify-content-between">
                <span class="header-filter">Rating</span>
                <span class="icon-expand-collapse">
                                        <i class="material-icons">remove</i>
                                    </span>
            </div>
            <div class="filter-group-body">
                <div class="filter-item">
                    <label for="Rating1" class="form-check-label">
                        <input type="checkbox" id="Rating1" class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">1 start</span>
                    </label>
                </div>
                <div class="filter-item">
                    <label for="Rating2" class="form-check-label">
                        <input type="checkbox" id="Rating2" class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">2 starts</span>
                    </label>
                </div>
                <div class="filter-item">
                    <label for="Rating3" class="form-check-label">
                        <input type="checkbox" id="Rating3" class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">3 starts</span>
                    </label>
                </div>
                <div class="filter-item">
                    <label for="Rating4" class="form-check-label">
                        <input type="checkbox" id="Rating4" class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">4 starts</span>
                    </label>
                </div>
                <div class="filter-item">
                    <label for="Rating5" class="form-check-label">
                        <input type="checkbox" id="Rating5" class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">5 starts</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="filter-group">
            <div class="filter-group-header head-sm justify-content-between">
                <span class="header-filter">Furniture</span>
                <span class="icon-expand-collapse">
                                        <i class="material-icons">remove</i>
                                    </span>
            </div>
            <div class="filter-group-body">
                <div class="filter-item">
                    <label for="Furniture1" class="form-check-label">
                        <input type="checkbox" id="Furniture1"
                               class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">Furnished</span>
                    </label>
                </div>
                <div class="filter-item">
                    <label for="Furniture2" class="form-check-label">
                        <input type="checkbox" id="Furniture2"
                               class="form-check-input checkbox-input">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        <span class="checkbox-label">Unfurnished</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>--}}

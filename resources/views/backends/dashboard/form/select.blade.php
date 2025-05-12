@extends('backends.layouts.app')


@push('style')
    {{-- {{ asset('assets') }}/css/ --}}
@endpush


@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Form Select</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>

                    <li class="breadcrumb-item active">Form Select</li>
                </ol>
            </div>
        </div>




        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed">
                        <h4 class="header-title mb-2">Select2</h4>
                        <p class="text-muted fs-14 mb-0">Select2 gives you a customizable select box with support for
                            searching, tagging, remote data sets, infinite scrolling, and many other highly used options.
                        </p>
                    </div><!-- end card header -->


                    <div class="card-body">

                        <div class="row g-3">
                            <div class="col-lg-6">
                                <p class="mb-1 fw-bold text-muted">Single Select</p>
                                <p class="text-muted fs-14">
                                    Select2 can take a regular select box like this...
                                </p>

                                <select class="form-control select2 select2-hidden-accessible" data-toggle="select2"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="3">Select</option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="2" style="width: 651px;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                            aria-labelledby="select2-secj-container"><span
                                                class="select2-selection__rendered" id="select2-secj-container"
                                                role="textbox" aria-readonly="true" title="Select">Select</span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <p class="mb-1 fw-bold text-muted">Multiple Select</p>
                                <p class="text-muted fs-14">
                                    Select2 can take a regular select box like this...
                                </p>

                                <select class="select2 form-control select2-multiple select2-hidden-accessible"
                                    data-toggle="select2" multiple="" data-placeholder="Choose ..."
                                    data-select2-id="4" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="5" style="width: 651px;"><span class="selection"><span
                                            class="select2-selection select2-selection--multiple" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                            aria-disabled="false">
                                            <ul class="select2-selection__rendered">
                                                <li class="select2-search select2-search--inline"><input
                                                        class="select2-search__field" type="search" tabindex="0"
                                                        autocomplete="off" autocorrect="off" autocapitalize="none"
                                                        spellcheck="false" role="searchbox" aria-autocomplete="list"
                                                        placeholder="Choose ..." style="width: 625.222px;"></li>
                                            </ul>
                                        </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed">
                        <h4 class="card-title mb-0">Choices</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div>
                            <h5 class="fs-14 mb-2">Single select input Example</h5>

                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-single-default" class="form-label text-muted">Default</label>
                                        <p class="text-muted">Set <code>data-choices</code> attribute to set a default
                                            single select.</p>
                                        <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                            aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select class="form-control choices__input"
                                                    data-choices="" name="choices-single-default"
                                                    id="choices-single-default" hidden="" tabindex="-1"
                                                    data-choice="active">
                                                    <option value="" data-custom-properties="[object Object]">This
                                                        is a placeholder</option>
                                                </select>
                                                <div class="choices__list choices__list--single">
                                                    <div class="choices__item choices__placeholder choices__item--selectable"
                                                        data-item="" data-id="1" data-value=""
                                                        data-custom-properties="[object Object]" aria-selected="true">This
                                                        is a placeholder</div>
                                                </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <input type="search" name="search_terms"
                                                    class="choices__input choices__input--cloned" autocomplete="off"
                                                    autocapitalize="off" spellcheck="false" role="textbox"
                                                    aria-autocomplete="list" aria-label="This is a placeholder"
                                                    placeholder="">
                                                <div class="choices__list" role="listbox">
                                                    <div id="choices--choices-single-default-item-choice-4"
                                                        class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                        role="option" data-choice="" data-id="4" data-value=""
                                                        data-select-text="Press to select" data-choice-selectable=""
                                                        aria-selected="true">This is a placeholder</div>
                                                    <div id="choices--choices-single-default-item-choice-1"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="1"
                                                        data-value="Choice 1" data-select-text="Press to select"
                                                        data-choice-selectable="">Choice 1</div>
                                                    <div id="choices--choices-single-default-item-choice-2"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="2"
                                                        data-value="Choice 2" data-select-text="Press to select"
                                                        data-choice-selectable="">Choice 2</div>
                                                    <div id="choices--choices-single-default-item-choice-3"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="3"
                                                        data-value="Choice 3" data-select-text="Press to select"
                                                        data-choice-selectable="">Choice 3</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-single-groups" class="form-label text-muted">Option
                                            Groups</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-groups</code> attribute
                                            to set option group</p>
                                        <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                            aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select class="form-control choices__input"
                                                    id="choices-single-groups" data-choices="" data-choices-groups=""
                                                    data-placeholder="Select City" name="choices-single-groups"
                                                    hidden="" tabindex="-1" data-choice="active">
                                                    <option value="" data-custom-properties="[object Object]">Choose
                                                        a city</option>
                                                </select>
                                                <div class="choices__list choices__list--single">
                                                    <div class="choices__item choices__placeholder choices__item--selectable"
                                                        data-item="" data-id="1" data-value=""
                                                        data-custom-properties="[object Object]" aria-selected="true">
                                                        Choose a city</div>
                                                </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <input type="search" name="search_terms"
                                                    class="choices__input choices__input--cloned" autocomplete="off"
                                                    autocapitalize="off" spellcheck="false" role="textbox"
                                                    aria-autocomplete="list" aria-label="Choose a city" placeholder="">
                                                <div class="choices__list" role="listbox">
                                                    <div id="choices--choices-single-groups-item-choice-1"
                                                        class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                        role="option" data-choice="" data-id="1" data-value=""
                                                        data-select-text="Press to select" data-choice-selectable=""
                                                        aria-selected="true">Choose a city</div>
                                                    <div class="choices__group " role="group" data-group=""
                                                        data-id="1260981172641" data-value="CA">
                                                        <div class="choices__heading">CA</div>
                                                    </div>
                                                    <div id="choices--choices-single-groups-item-choice-17"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="17"
                                                        data-value="Montreal" data-select-text="Press to select"
                                                        data-choice-selectable="">Montreal</div>
                                                    <div id="choices--choices-single-groups-item-choice-18"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="18"
                                                        data-value="Toronto" data-select-text="Press to select"
                                                        data-choice-selectable="">Toronto</div>
                                                    <div id="choices--choices-single-groups-item-choice-19"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="19"
                                                        data-value="Vancouver" data-select-text="Press to select"
                                                        data-choice-selectable="">Vancouver</div>
                                                    <div class="choices__group " role="group" data-group=""
                                                        data-id="703671623740" data-value="FR">
                                                        <div class="choices__heading">FR</div>
                                                    </div>
                                                    <div id="choices--choices-single-groups-item-choice-6"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="6" data-value="Lyon"
                                                        data-select-text="Press to select" data-choice-selectable="">Lyon
                                                    </div>
                                                    <div id="choices--choices-single-groups-item-choice-7"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="7"
                                                        data-value="Marseille" data-select-text="Press to select"
                                                        data-choice-selectable="">Marseille</div>
                                                    <div id="choices--choices-single-groups-item-choice-5"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="5" data-value="Paris"
                                                        data-select-text="Press to select" data-choice-selectable="">Paris
                                                    </div>
                                                    <div class="choices__group " role="group" data-group=""
                                                        data-id="676220615520" data-value="SP">
                                                        <div class="choices__heading">SP</div>
                                                    </div>
                                                    <div id="choices--choices-single-groups-item-choice-15"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="15"
                                                        data-value="Barcelona" data-select-text="Press to select"
                                                        data-choice-selectable="">Barcelona</div>
                                                    <div id="choices--choices-single-groups-item-choice-14"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="14"
                                                        data-value="Madrid" data-select-text="Press to select"
                                                        data-choice-selectable="">Madrid</div>
                                                    <div id="choices--choices-single-groups-item-choice-16"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="16"
                                                        data-value="Malaga" data-select-text="Press to select"
                                                        data-choice-selectable="">Malaga</div>
                                                    <div class="choices__group " role="group" data-group=""
                                                        data-id="1199472891507" data-value="UK">
                                                        <div class="choices__heading">UK</div>
                                                    </div>
                                                    <div id="choices--choices-single-groups-item-choice-4"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="4"
                                                        data-value="Liverpool" data-select-text="Press to select"
                                                        data-choice-selectable="">Liverpool</div>
                                                    <div id="choices--choices-single-groups-item-choice-2"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="2"
                                                        data-value="London" data-select-text="Press to select"
                                                        data-choice-selectable="">London</div>
                                                    <div id="choices--choices-single-groups-item-choice-3"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="3"
                                                        data-value="Manchester" data-select-text="Press to select"
                                                        data-choice-selectable="">Manchester</div>
                                                    <div class="choices__group " role="group" data-group=""
                                                        data-id="699237151660" data-value="US">
                                                        <div class="choices__heading">US</div>
                                                    </div>
                                                    <div id="choices--choices-single-groups-item-choice-13"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="13"
                                                        data-value="Michigan" data-select-text="Press to select"
                                                        data-choice-selectable="">Michigan</div>
                                                    <div id="choices--choices-single-groups-item-choice-11"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="11"
                                                        data-value="New York" data-select-text="Press to select"
                                                        data-choice-selectable="">New York</div>
                                                    <div id="choices--choices-single-groups-item-choice-12"
                                                        class="choices__item choices__item--choice choices__item--disabled"
                                                        role="treeitem" data-choice="" data-id="12"
                                                        data-value="Washington" data-select-text="Press to select"
                                                        data-choice-disabled="" aria-disabled="true">Washington</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-single-no-search" class="form-label text-muted">Options added
                                            via config with no search</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-search-false
                                                data-choices-removeItem</code></p>
                                        <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                            aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select class="form-control choices__input"
                                                    id="choices-single-no-search" name="choices-single-no-search"
                                                    data-choices="" data-choices-search-false=""
                                                    data-choices-removeitem="" hidden="" tabindex="-1"
                                                    data-choice="active">
                                                    <option value="Zero" data-custom-properties="[object Object]">Zero
                                                    </option>
                                                </select>
                                                <div class="choices__list choices__list--single">
                                                    <div class="choices__item choices__item--selectable" data-item=""
                                                        data-id="1" data-value="Zero"
                                                        data-custom-properties="[object Object]" aria-selected="true"
                                                        data-deletable="">Zero<button type="button"
                                                            class="choices__button"
                                                            aria-label="Remove item: &#39;Zero&#39;" data-button="">Remove
                                                            item</button></div>
                                                </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <div class="choices__list" role="listbox">
                                                    <div id="choices--choices-single-no-search-item-choice-1"
                                                        class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                        role="option" data-choice="" data-id="1" data-value="Five"
                                                        data-select-text="Press to select" data-choice-selectable=""
                                                        aria-selected="true">Five</div>
                                                    <div id="choices--choices-single-no-search-item-choice-2"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="2" data-value="Four"
                                                        data-select-text="Press to select" data-choice-selectable="">Four
                                                    </div>
                                                    <div id="choices--choices-single-no-search-item-choice-3"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="3" data-value="One"
                                                        data-select-text="Press to select" data-choice-selectable="">One
                                                    </div>
                                                    <div id="choices--choices-single-no-search-item-choice-4"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="4" data-value="Six"
                                                        data-select-text="Press to select" data-choice-selectable="">Six
                                                    </div>
                                                    <div id="choices--choices-single-no-search-item-choice-5"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="5" data-value="Three"
                                                        data-select-text="Press to select" data-choice-selectable="">Three
                                                    </div>
                                                    <div id="choices--choices-single-no-search-item-choice-6"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="6" data-value="Two"
                                                        data-select-text="Press to select" data-choice-selectable="">Two
                                                    </div>
                                                    <div id="choices--choices-single-no-search-item-choice-7"
                                                        class="choices__item choices__item--choice is-selected choices__item--selectable"
                                                        role="option" data-choice="" data-id="7" data-value="Zero"
                                                        data-select-text="Press to select" data-choice-selectable="">Zero
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-single-no-sorting" class="form-label text-muted">Options added
                                            via config with no sorting</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-sorting-false</code>
                                            attribute.</p>
                                        <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                            aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select class="form-control choices__input"
                                                    id="choices-single-no-sorting" name="choices-single-no-sorting"
                                                    data-choices="" data-choices-sorting-false="" hidden=""
                                                    tabindex="-1" data-choice="active">
                                                    <option value="Madrid" data-custom-properties="[object Object]">Madrid
                                                    </option>
                                                </select>
                                                <div class="choices__list choices__list--single">
                                                    <div class="choices__item choices__item--selectable" data-item=""
                                                        data-id="1" data-value="Madrid"
                                                        data-custom-properties="[object Object]" aria-selected="true">
                                                        Madrid</div>
                                                </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <input type="search" name="search_terms"
                                                    class="choices__input choices__input--cloned" autocomplete="off"
                                                    autocapitalize="off" spellcheck="false" role="textbox"
                                                    aria-autocomplete="list" aria-label="null" placeholder="">
                                                <div class="choices__list" role="listbox">
                                                    <div id="choices--choices-single-no-sorting-item-choice-1"
                                                        class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted"
                                                        role="option" data-choice="" data-id="1" data-value="Madrid"
                                                        data-select-text="Press to select" data-choice-selectable=""
                                                        aria-selected="true">Madrid</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-2"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="2"
                                                        data-value="Toronto" data-select-text="Press to select"
                                                        data-choice-selectable="">Toronto</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-3"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="3"
                                                        data-value="Vancouver" data-select-text="Press to select"
                                                        data-choice-selectable="">Vancouver</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-4"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="4" data-value="London"
                                                        data-select-text="Press to select" data-choice-selectable="">
                                                        London</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-5"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="5"
                                                        data-value="Manchester" data-select-text="Press to select"
                                                        data-choice-selectable="">Manchester</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-6"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="6"
                                                        data-value="Liverpool" data-select-text="Press to select"
                                                        data-choice-selectable="">Liverpool</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-7"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="7" data-value="Paris"
                                                        data-select-text="Press to select" data-choice-selectable="">Paris
                                                    </div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-8"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="8" data-value="Malaga"
                                                        data-select-text="Press to select" data-choice-selectable="">
                                                        Malaga</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-9"
                                                        class="choices__item choices__item--choice choices__item--disabled"
                                                        role="option" data-choice="" data-id="9"
                                                        data-value="Washington" data-select-text="Press to select"
                                                        data-choice-disabled="" aria-disabled="true">Washington</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-10"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="10" data-value="Lyon"
                                                        data-select-text="Press to select" data-choice-selectable="">Lyon
                                                    </div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-11"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="11"
                                                        data-value="Marseille" data-select-text="Press to select"
                                                        data-choice-selectable="">Marseille</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-12"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="12"
                                                        data-value="Hamburg" data-select-text="Press to select"
                                                        data-choice-selectable="">Hamburg</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-13"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="13" data-value="Munich"
                                                        data-select-text="Press to select" data-choice-selectable="">
                                                        Munich</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-14"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="14"
                                                        data-value="Barcelona" data-select-text="Press to select"
                                                        data-choice-selectable="">Barcelona</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-15"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="15" data-value="Berlin"
                                                        data-select-text="Press to select" data-choice-selectable="">
                                                        Berlin</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-16"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="16"
                                                        data-value="Montreal" data-select-text="Press to select"
                                                        data-choice-selectable="">Montreal</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-17"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="17"
                                                        data-value="New York" data-select-text="Press to select"
                                                        data-choice-selectable="">New York</div>
                                                    <div id="choices--choices-single-no-sorting-item-choice-18"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="18"
                                                        data-value="Michigan" data-select-text="Press to select"
                                                        data-choice-selectable="">Michigan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- Single select input Example -->

                        <div class="mt-4">
                            <h5 class="fs-14 mb-3">Multiple select input</h5>

                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-multiple-default"
                                            class="form-label text-muted">Default</label>
                                        <p class="text-muted">Set <code>data-choices multiple</code> attribute.</p>
                                        <div class="choices" data-type="select-multiple" role="combobox"
                                            aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select class="form-control choices__input"
                                                    id="choices-multiple-default" data-choices=""
                                                    name="choices-multiple-default" multiple="" hidden=""
                                                    tabindex="-1" data-choice="active">
                                                    <option value="Choice 1" data-custom-properties="[object Object]">
                                                        Choice 1</option>
                                                </select>
                                                <div class="choices__list choices__list--multiple">
                                                    <div class="choices__item choices__item--selectable" data-item=""
                                                        data-id="1" data-value="Choice 1"
                                                        data-custom-properties="[object Object]" aria-selected="true">
                                                        Choice 1</div>
                                                </div><input type="search" name="search_terms"
                                                    class="choices__input choices__input--cloned" autocomplete="off"
                                                    autocapitalize="off" spellcheck="false" role="textbox"
                                                    aria-autocomplete="list" aria-label="null">
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <div class="choices__list" aria-multiselectable="true" role="listbox">
                                                    <div id="choices--choices-multiple-default-item-choice-2"
                                                        class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                        role="option" data-choice="" data-id="2"
                                                        data-value="Choice 2" data-select-text="Press to select"
                                                        data-choice-selectable="" aria-selected="true">Choice 2</div>
                                                    <div id="choices--choices-multiple-default-item-choice-3"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="3"
                                                        data-value="Choice 3" data-select-text="Press to select"
                                                        data-choice-selectable="">Choice 3</div>
                                                    <div id="choices--choices-multiple-default-item-choice-4"
                                                        class="choices__item choices__item--choice choices__item--disabled"
                                                        role="option" data-choice="" data-id="4"
                                                        data-value="Choice 4" data-select-text="Press to select"
                                                        data-choice-disabled="" aria-disabled="true">Choice 4</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-multiple-remove-button" class="form-label text-muted">With
                                            remove button</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-removeItem
                                                multiple</code> attribute.</p>
                                        <div class="choices" data-type="select-multiple" role="combobox"
                                            aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select class="form-control choices__input"
                                                    id="choices-multiple-remove-button" data-choices=""
                                                    data-choices-removeitem="" name="choices-multiple-remove-button"
                                                    multiple="" hidden="" tabindex="-1" data-choice="active">
                                                    <option value="Choice 1" data-custom-properties="[object Object]">
                                                        Choice 1</option>
                                                </select>
                                                <div class="choices__list choices__list--multiple">
                                                    <div class="choices__item choices__item--selectable" data-item=""
                                                        data-id="1" data-value="Choice 1"
                                                        data-custom-properties="[object Object]" aria-selected="true"
                                                        data-deletable="">Choice 1<button type="button"
                                                            class="choices__button"
                                                            aria-label="Remove item: &#39;Choice 1&#39;"
                                                            data-button="">Remove item</button></div>
                                                </div><input type="search" name="search_terms"
                                                    class="choices__input choices__input--cloned" autocomplete="off"
                                                    autocapitalize="off" spellcheck="false" role="textbox"
                                                    aria-autocomplete="list" aria-label="null">
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <div class="choices__list" aria-multiselectable="true" role="listbox">
                                                    <div id="choices--choices-multiple-remove-button-item-choice-2"
                                                        class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                        role="option" data-choice="" data-id="2"
                                                        data-value="Choice 2" data-select-text="Press to select"
                                                        data-choice-selectable="" aria-selected="true">Choice 2</div>
                                                    <div id="choices--choices-multiple-remove-button-item-choice-3"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="3"
                                                        data-value="Choice 3" data-select-text="Press to select"
                                                        data-choice-selectable="">Choice 3</div>
                                                    <div id="choices--choices-multiple-remove-button-item-choice-4"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="4"
                                                        data-value="Choice 4" data-select-text="Press to select"
                                                        data-choice-selectable="">Choice 4</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-multiple-groups" class="form-label text-muted">Option
                                            groups</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-multiple-groups="true"
                                                multiple</code> attribute. </p>
                                        <div class="choices" data-type="select-multiple" role="combobox"
                                            aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select class="form-control choices__input"
                                                    id="choices-multiple-groups" name="choices-multiple-groups"
                                                    data-choices="" data-choices-multiple-groups="true" multiple=""
                                                    hidden="" tabindex="-1" data-choice="active"></select>
                                                <div class="choices__list choices__list--multiple"></div><input
                                                    type="search" name="search_terms"
                                                    class="choices__input choices__input--cloned" autocomplete="off"
                                                    autocapitalize="off" spellcheck="false" role="textbox"
                                                    aria-autocomplete="list" aria-label="Choose a city"
                                                    placeholder="Choose a city" style="min-width: 14ch; width: 1ch;">
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <div class="choices__list" aria-multiselectable="true" role="listbox">
                                                    <div class="choices__group " role="group" data-group=""
                                                        data-id="1076791825930" data-value="CA">
                                                        <div class="choices__heading">CA</div>
                                                    </div>
                                                    <div id="choices--choices-multiple-groups-item-choice-17"
                                                        class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                        role="treeitem" data-choice="" data-id="17"
                                                        data-value="Montreal" data-select-text="Press to select"
                                                        data-choice-selectable="" aria-selected="true">Montreal</div>
                                                    <div id="choices--choices-multiple-groups-item-choice-18"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="18"
                                                        data-value="Toronto" data-select-text="Press to select"
                                                        data-choice-selectable="">Toronto</div>
                                                    <div id="choices--choices-multiple-groups-item-choice-19"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="19"
                                                        data-value="Vancouver" data-select-text="Press to select"
                                                        data-choice-selectable="">Vancouver</div>
                                                    <div class="choices__group " role="group" data-group=""
                                                        data-id="82513300851" data-value="FR">
                                                        <div class="choices__heading">FR</div>
                                                    </div>
                                                    <div id="choices--choices-multiple-groups-item-choice-6"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="6" data-value="Lyon"
                                                        data-select-text="Press to select" data-choice-selectable="">Lyon
                                                    </div>
                                                    <div id="choices--choices-multiple-groups-item-choice-7"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="7"
                                                        data-value="Marseille" data-select-text="Press to select"
                                                        data-choice-selectable="">Marseille</div>
                                                    <div id="choices--choices-multiple-groups-item-choice-5"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="5"
                                                        data-value="Paris" data-select-text="Press to select"
                                                        data-choice-selectable="">Paris</div>
                                                    <div class="choices__group " role="group" data-group=""
                                                        data-id="1545229557501" data-value="SP">
                                                        <div class="choices__heading">SP</div>
                                                    </div>
                                                    <div id="choices--choices-multiple-groups-item-choice-15"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="15"
                                                        data-value="Barcelona" data-select-text="Press to select"
                                                        data-choice-selectable="">Barcelona</div>
                                                    <div id="choices--choices-multiple-groups-item-choice-14"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="14"
                                                        data-value="Madrid" data-select-text="Press to select"
                                                        data-choice-selectable="">Madrid</div>
                                                    <div id="choices--choices-multiple-groups-item-choice-16"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="16"
                                                        data-value="Malaga" data-select-text="Press to select"
                                                        data-choice-selectable="">Malaga</div>
                                                    <div class="choices__group " role="group" data-group=""
                                                        data-id="159287726737" data-value="UK">
                                                        <div class="choices__heading">UK</div>
                                                    </div>
                                                    <div id="choices--choices-multiple-groups-item-choice-4"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="4"
                                                        data-value="Liverpool" data-select-text="Press to select"
                                                        data-choice-selectable="">Liverpool</div>
                                                    <div id="choices--choices-multiple-groups-item-choice-2"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="2"
                                                        data-value="London" data-select-text="Press to select"
                                                        data-choice-selectable="">London</div>
                                                    <div id="choices--choices-multiple-groups-item-choice-3"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="3"
                                                        data-value="Manchester" data-select-text="Press to select"
                                                        data-choice-selectable="">Manchester</div>
                                                    <div class="choices__group " role="group" data-group=""
                                                        data-id="1531999086444" data-value="US">
                                                        <div class="choices__heading">US</div>
                                                    </div>
                                                    <div id="choices--choices-multiple-groups-item-choice-13"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="13"
                                                        data-value="Michigan" data-select-text="Press to select"
                                                        data-choice-selectable="">Michigan</div>
                                                    <div id="choices--choices-multiple-groups-item-choice-11"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="treeitem" data-choice="" data-id="11"
                                                        data-value="New York" data-select-text="Press to select"
                                                        data-choice-selectable="">New York</div>
                                                    <div id="choices--choices-multiple-groups-item-choice-12"
                                                        class="choices__item choices__item--choice choices__item--disabled"
                                                        role="treeitem" data-choice="" data-id="12"
                                                        data-value="Washington" data-select-text="Press to select"
                                                        data-choice-disabled="" aria-disabled="true">Washington</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                        <!-- multi select input Example -->

                        <div class="mt-4">
                            <h5 class="fs-14 mb-3">Text inputs</h5>

                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-text-remove-button" class="form-label text-muted">Set limit
                                            values with remove button</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-limit="Required Limit"
                                                data-choices-removeItem</code> attribute.</p>
                                        <div class="choices" data-type="text" aria-haspopup="true"
                                            aria-expanded="false">
                                            <div class="choices__inner"><input class="form-control choices__input"
                                                    id="choices-text-remove-button" data-choices=""
                                                    data-choices-limit="3" data-choices-removeitem="" type="text"
                                                    value="Task-1" hidden="" tabindex="-1"
                                                    data-choice="active">
                                                <div class="choices__list choices__list--multiple">
                                                    <div class="choices__item choices__item--selectable" data-item=""
                                                        data-id="1" data-value="Task-1"
                                                        data-custom-properties="[object Object]" aria-selected="true"
                                                        data-deletable="">Task-1<button type="button"
                                                            class="choices__button"
                                                            aria-label="Remove item: &#39;Task-1&#39;"
                                                            data-button="">Remove item</button></div>
                                                </div><input type="search" name="search_terms"
                                                    class="choices__input choices__input--cloned" autocomplete="off"
                                                    autocapitalize="off" spellcheck="false" role="textbox"
                                                    aria-autocomplete="list" aria-label="null">
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-text-unique-values" class="form-label text-muted">Unique
                                            values only, no pasting</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-text-unique-true</code>
                                            attribute.</p>
                                        <div class="choices" data-type="text" aria-haspopup="true"
                                            aria-expanded="false">
                                            <div class="choices__inner"><input class="form-control choices__input"
                                                    id="choices-text-unique-values" data-choices=""
                                                    data-choices-text-unique-true="" type="text"
                                                    value="Project-A,Project-B" hidden="" tabindex="-1"
                                                    data-choice="active">
                                                <div class="choices__list choices__list--multiple">
                                                    <div class="choices__item choices__item--selectable" data-item=""
                                                        data-id="1" data-value="Project-A"
                                                        data-custom-properties="[object Object]" aria-selected="true">
                                                        Project-A</div>
                                                    <div class="choices__item choices__item--selectable" data-item=""
                                                        data-id="2" data-value="Project-B"
                                                        data-custom-properties="[object Object]" aria-selected="true">
                                                        Project-B</div>
                                                </div><input type="search" name="search_terms"
                                                    class="choices__input choices__input--cloned" autocomplete="off"
                                                    autocapitalize="off" spellcheck="false" role="textbox"
                                                    aria-autocomplete="list" aria-label="null">
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div>
                                <label for="choices-text-disabled" class="form-label text-muted">Disabled</label>
                                <p class="text-muted">Set <code>data-choices data-choices-text-disabled-true</code>
                                    attribute.</p>
                                <div class="choices is-disabled" data-type="text" aria-haspopup="true"
                                    aria-expanded="false" aria-disabled="true">
                                    <div class="choices__inner"><input class="form-control choices__input"
                                            id="choices-text-disabled" data-choices=""
                                            data-choices-text-disabled-true="" type="text"
                                            value="josh@joshuajohnson.co.uk,joe@bloggs.co.uk" hidden=""
                                            tabindex="-1" data-choice="active" disabled="">
                                        <div class="choices__list choices__list--multiple">
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="1" data-value="josh@joshuajohnson.co.uk"
                                                data-custom-properties="[object Object]" aria-selected="true">
                                                josh@joshuajohnson.co.uk</div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="2" data-value="joe@bloggs.co.uk"
                                                data-custom-properties="[object Object]" aria-selected="true">
                                                joe@bloggs.co.uk</div>
                                        </div><input type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="null" disabled="">
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection


@push('script')

@endpush

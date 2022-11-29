<div>
    @if (count($videos) > 0)
        <section class="container pt-70 pb-70">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <aside class="widget-area">
                        <section class="widget widget_search">
                            <form class="search-form">
                                <label>
                                    <input type="search" class="search-field" placeholder="ابحث عن فيديو">
                                </label>
                                <button type="submit">
                                    <i class='bx bx-search-alt'></i>
                                </button>
                            </form>
                        </section>
                    </aside>
                </div>
            </div>

        </section>
    @endif
    @include('includes.videos', ['flag' => true])
</div>

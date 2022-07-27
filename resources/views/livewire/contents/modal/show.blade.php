<div class="flex flex-col bg-base-100">
    <img src="{{ $collection['imageurl'] }}" alt="" srcset="">
    <div class="flex flex-col p-6 space-y-4">
        <article class="prose sm:prose-sm">
            <h3>Image Details</h3>
            <p>{{ $imageDetailId }}</p>
            <div class="flex flex-row justify-between space-x-4">
                <div class="flex flex-col">
                    <h4>Created</h4>
                    <p>{{ $collection['created_at'] }}</p>
                    <h4>Method</h4>
                    <p>{{ $collection['method_name'] }}</p>
                    @switch($collection['method_name'])
                    @case("Cube")
                    <h4>Length</h4>
                    <p>{{ $collection['detail']['length'] }} m</p>
                    <h4>Depth</h4>
                    <p>{{ $collection['detail']['depth'] }} m</p>
                    <h4>Height</h4>
                    <p>{{ $collection['detail']['height'] }} m</p>
                    @break
                    @case("Cylinder")
                    <h4>Height</h4>
                    <p>{{ $collection['detail']['height'] }} m</p>
                    <h4>Diameter</h4>
                    <p>{{ $collection['detail']['diameter'] }} m</p>
                    @break
                    @case("Line")
                    <h4>Height</h4>
                    <p>{{ $collection['detail']['height'] }} m</p>
                    <h4>Diameter</h4>
                    <p>{{ $collection['detail']['diameter'] }} m</p>
                    @break

                    @endswitch
                </div>
                <div class="flex flex-col">
                    @switch($collection['method_name'])
                    @case("Cube")
                    <h4>Volume</h4>
                    <p>{{ $this->getVolume($collection['method_name'], $collection['detail']['length'],
                        $collection['detail']['depth'], $collection['detail']['height']) }} m<sup>3</sup></p>
                    <h4>Parameter</h4>
                    <p>{{ $this->getParameter($collection['method_name'], $collection['detail']['length'],
                        $collection['detail']['depth'], $collection['detail']['height']) }} m</p>
                    <h4>Total Area</h4>
                    <p>{{ $this->getTotalArea($collection['method_name'], $collection['detail']['length'],
                        $collection['detail']['depth'], $collection['detail']['height']) }} m<sup>2</sup></p>
                    <h4>Depth Height Area</h4>
                    <p>{{ $this->getDepthHeightArea($collection['detail']['depth'], $collection['detail']['height']) }}
                        m<sup>2</sup></p>
                    <h4>Length Height Area</h4>
                    <p>{{ $this->getLengthHeightArea($collection['detail']['length'], $collection['detail']['height'])
                        }} m<sup>2</sup></p>
                    <h4>Length Depth Area</h4>
                    <p>{{ $this->getLengthDepthArea($collection['detail']['length'], $collection['detail']['depth']) }}
                        m<sup>2</sup></p>
                    @break
                    @case("Cylinder")
                    <h4>Circumference</h4>
                    <p>{{ $this->getCircumference($collection['detail']['diameter']) }}
                        m</p>
                    <p></p>
                    <h4>Volume</h4>
                    <p>{{ $this->getVolume($collection['method_name'], null, null, null,
                        $collection['detail']['diameter']) }}
                        m<sup>3</sup></p>
                    <h4>Total Area</h4>
                    <p>{{ $this->getTotalArea($collection['method_name'], null, null, null,
                        $collection['detail']['diameter'])
                        }} m<sup>2</sup></p>
                    <h4>Parameter</h4>
                    <p>{{ $this->getParameter($collection['method_name'], null, null, null,
                        $collection['detail']['diameter'])
                        }}
                        m</p>
                    <h4>Side Area</h4>
                    <p>{{ $this->getAreaCircle($collection['detail']['diameter']) }}
                        m<sup>2</sup></p>
                    <h4>Circle Area</h4>
                    <p>{{ $this->getAreaSide($collection['detail']['diameter'], $collection['detail']['height']) }}
                        m<sup>2</sup></p>
                    @break
                    @case("Line")
                    @break
                    @endswitch
                </div>
            </div>
        </article>
    </div>
</div>

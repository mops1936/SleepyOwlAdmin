<div {!! $attributes !!}>
	@if ($visibled)
		@if (!empty($value))
            {{ $a = html()->a($value, $text)->attributes($linkAttributes)->attribute('target', '_blank') }}
{{--			<a href="{{ $value }}" {{ app('html')->attributes($linkAttributes) }}>--}}
				@if($icon)
                    {{ $a->child(html()->i()->class('$icon')->attributes(['data-toggle' => 'tooltip', 'title' => trans('sleeping_owl::lang.table.filter-goto')])) }}
{{--					<i class="{{ $icon }}" data-toggle="tooltip" title="{{ trans('sleeping_owl::lang.table.filter-goto') }}"></i>--}}
				@endif

{{--				@if($text)--}}
{{--					{{ $text }}--}}
{{--				@endif--}}

{{--			</a>--}}
		@endif
		{!! $append !!}

		@if($small)
			<small class="clearfix">{!! $small !!}</small>
		@endif
	@endif
</div>

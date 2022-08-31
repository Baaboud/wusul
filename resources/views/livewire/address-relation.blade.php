<div class='row'>
           <div class="mb-3 col-md-6">
                                    <label for="timeZones" class="form-label">المحافظة</label>
                                    <select id="Basic" wire:model='state' name='state' class=" w-100" data-style="btn-default">
                                        @forelse($states as $state)
                                            
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                        @empty
                                            
                                        @endforelse

                                    </select>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="timeZones" class="form-label">المدينة</label>
                                    <select id="selectpickerBasic" class=" w-100" data-style="btn-default" name='city'>

                                        @foreach($states as $state)
                                            @forelse($state->cities as $city)
                                                <option value="{{$city->id}}" selected>{{$city->name}}</option>
                                            @empty

                                            @endforelse
                                            
                                        @endforeach
                                    </select>
                                </div>
</div>

<?php
namespace GetThingsDone\Masterdata\Actions;

use GetThingsDone\Masterdata\Models\Group;
use Lorisleiva\Actions\Concerns\AsAction;

class GetElements
{
    use AsAction;

    public function handle(Group | int | string $group)
    {
        if (! ($group instanceof Group)) {
            $group = Group::whereId($group)->orWhere(['code' => $group])->first();
        }
        $elements = $group->elements()->whereIsActived(1)->orderBy('order')->get();

        return $elements;
    }
}

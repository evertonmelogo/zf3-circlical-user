<?php

namespace CirclicalUser\Provider;

interface GroupActionRuleProviderInterface
{

    /**
     * @param $string
     *
     * @return GroupActionRuleInterface[]
     */
    public function getStringActions($string) : array;

    /**
     * @param ResourceInterface $resource
     *
     * @return array|GroupActionRuleInterface[]
     */
    public function getResourceActions(ResourceInterface $resource) : array;


    public function update($rule);


    public function create() : GroupActionRuleInterface;


    public function save($rule);

}
<?php

namespace atk4\report;

class ReportExpression extends \atk4\dsql\Expression
{
    /** Builds and renders union expression properly
     *
     * @
     */
    public function setUnionTemplate()
    {
        $this->template = '(';
        foreach ($this->args['custom'] as $key => $arg) {
            if(is_numeric($key)) {
                if($key>0) {
                    $this->template .= ' UNION ALL ';
                }
                $this->template .= '{' . $key . '}';
            }
        }
        $this->template .= ') {table}';

        return $this;
    }
}
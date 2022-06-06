<?php
const ONE=1;
class broExample{
 const TWO=ONE*1;
 const THREE=ONE+self::TWO; 
 const SENTENCE = 'The value of THREE is '.self::THREE;
}
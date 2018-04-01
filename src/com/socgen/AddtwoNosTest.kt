package com.socgen

import org.junit.jupiter.api.Assertions
import org.junit.jupiter.api.Test
import org.junit.jupiter.api.Assertions.*

internal class AddtwoNosTest {

    @Test
    fun readInt() {

    }

    @Test
    fun addNum() {
        val obj = AddtwoNos()
        Assertions.assertNotEquals(14,obj.addNum(5,10), "test Pass")
        Assertions.assertEquals(15,obj.addNum(5,10), "test Pass")
        Assertions.assertEquals(-5,obj.addNum(5,-10), "test Pass")
    }
}
<?php

namespace SMW\Test;

use SMW\SemanticData;

/**
 * Tests for the SemanticData class
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 *
 * @license GNU GPL v2+
 * @since   1.9
 *
 * @author mwjames
 */

/**
 * @covers \SMW\SemanticData
 *
 * @ingroup Test
 *
 * @group SMW
 * @group SMWExtension
 */
class SemanticDataTest extends SemanticMediaWikiTestCase {

	/**
	 * Returns the name of the class to be tested
	 *
	 * @return string|false
	 */
	public function getClass() {
		return '\SMW\SemanticData';
	}

	/**
	 * Helper method that returns a SemanticData object
	 *
	 * @since 1.9
	 *
	 * @return SemanticData
	 */
	private function getInstance() {
		return new SemanticData( $this->getSubject() );
	}

	/**
	 * @test SemanticData::__construct
	 *
	 * @since 1.9
	 */
	public function testConstructor() {
		$this->assertInstanceOf( $this->getClass(), $this->getInstance() );
		$this->assertInstanceOf( 'SMWSemanticData', $this->getInstance() );
	}

}
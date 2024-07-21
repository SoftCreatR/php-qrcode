<?php
/**
 * Class QRGdImageJPEG
 *
 * @created      25.10.2023
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2023 smiley
 * @license      MIT
 *
 * @noinspection PhpComposerExtensionStubsInspection
 */
declare(strict_types=1);

namespace chillerlan\QRCode\Output;

use function imagejpeg, max, min;

/**
 * GdImage jpeg output
 *
 * @see \imagejpeg()
 */
class QRGdImageJPEG extends QRGdImage{

	final public const MIME_TYPE = 'image/jpg';

	protected function setTransparencyColor():void{
		// noop - transparency is not supported
	}

	protected function renderImage():void{
		imagejpeg($this->image, null, max(-1, min(100, $this->options->quality)));
	}

}
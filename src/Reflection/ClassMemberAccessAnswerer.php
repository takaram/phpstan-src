<?php declare(strict_types = 1);

namespace PHPStan\Reflection;

/** @api */
interface ClassMemberAccessAnswerer
{

	/**
	 * @phpstan-assert-if-true !null $this->getClassReflection()
	 */
	public function isInClass(): bool;

	public function getClassReflection(): ?ClassReflection;

	/**
	 * @deprecated Use canReadProperty() or canWriteProperty()
	 */
	public function canAccessProperty(PropertyReflection $propertyReflection): bool;

	public function canReadProperty(ExtendedPropertyReflection $propertyReflection): bool;

	public function canWriteProperty(ExtendedPropertyReflection $propertyReflection): bool;

	public function canCallMethod(MethodReflection $methodReflection): bool;

	public function canAccessConstant(ClassConstantReflection $constantReflection): bool;

}

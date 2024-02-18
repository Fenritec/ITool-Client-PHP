<?php

namespace FenritecEu\ItoolClientPhp\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\CheckArray;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class V1ClientContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1ClientContact();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ConId', $data)) {
                $object->setConId($data['ConId']);
                unset($data['ConId']);
            }
            if (\array_key_exists('ConTitre', $data)) {
                $object->setConTitre($data['ConTitre']);
                unset($data['ConTitre']);
            }
            if (\array_key_exists('ConNom', $data)) {
                $object->setConNom($data['ConNom']);
                unset($data['ConNom']);
            }
            if (\array_key_exists('ConFonction', $data)) {
                $object->setConFonction($data['ConFonction']);
                unset($data['ConFonction']);
            }
            if (\array_key_exists('ConObservation', $data)) {
                $object->setConObservation($data['ConObservation']);
                unset($data['ConObservation']);
            }
            if (\array_key_exists('ConDefault', $data)) {
                $object->setConDefault($data['ConDefault']);
                unset($data['ConDefault']);
            }
            if (\array_key_exists('ConEmail', $data)) {
                $object->setConEmail($data['ConEmail']);
                unset($data['ConEmail']);
            }
            if (\array_key_exists('ConTelephone', $data)) {
                $object->setConTelephone($data['ConTelephone']);
                unset($data['ConTelephone']);
            }
            if (\array_key_exists('ConPortable', $data)) {
                $object->setConPortable($data['ConPortable']);
                unset($data['ConPortable']);
            }
            if (\array_key_exists('ConFax', $data)) {
                $object->setConFax($data['ConFax']);
                unset($data['ConFax']);
            }
            if (\array_key_exists('Adresses', $data)) {
                $values = [];
                foreach ($data['Adresses'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setAdresses($values);
                unset($data['Adresses']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('conId') && null !== $object->getConId()) {
                $data['ConId'] = $object->getConId();
            }
            $data['ConTitre'] = $object->getConTitre();
            $data['ConNom'] = $object->getConNom();
            $data['ConFonction'] = $object->getConFonction();
            $data['ConObservation'] = $object->getConObservation();
            $data['ConDefault'] = $object->getConDefault();
            $data['ConEmail'] = $object->getConEmail();
            if ($object->isInitialized('conTelephone') && null !== $object->getConTelephone()) {
                $data['ConTelephone'] = $object->getConTelephone();
            }
            if ($object->isInitialized('conPortable') && null !== $object->getConPortable()) {
                $data['ConPortable'] = $object->getConPortable();
            }
            if ($object->isInitialized('conFax') && null !== $object->getConFax()) {
                $data['ConFax'] = $object->getConFax();
            }
            if ($object->isInitialized('adresses') && null !== $object->getAdresses()) {
                $values = [];
                foreach ($object->getAdresses() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['Adresses'] = $values;
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact' => false];
        }
    }
} else {
    class V1ClientContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1ClientContact();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ConId', $data)) {
                $object->setConId($data['ConId']);
                unset($data['ConId']);
            }
            if (\array_key_exists('ConTitre', $data)) {
                $object->setConTitre($data['ConTitre']);
                unset($data['ConTitre']);
            }
            if (\array_key_exists('ConNom', $data)) {
                $object->setConNom($data['ConNom']);
                unset($data['ConNom']);
            }
            if (\array_key_exists('ConFonction', $data)) {
                $object->setConFonction($data['ConFonction']);
                unset($data['ConFonction']);
            }
            if (\array_key_exists('ConObservation', $data)) {
                $object->setConObservation($data['ConObservation']);
                unset($data['ConObservation']);
            }
            if (\array_key_exists('ConDefault', $data)) {
                $object->setConDefault($data['ConDefault']);
                unset($data['ConDefault']);
            }
            if (\array_key_exists('ConEmail', $data)) {
                $object->setConEmail($data['ConEmail']);
                unset($data['ConEmail']);
            }
            if (\array_key_exists('ConTelephone', $data)) {
                $object->setConTelephone($data['ConTelephone']);
                unset($data['ConTelephone']);
            }
            if (\array_key_exists('ConPortable', $data)) {
                $object->setConPortable($data['ConPortable']);
                unset($data['ConPortable']);
            }
            if (\array_key_exists('ConFax', $data)) {
                $object->setConFax($data['ConFax']);
                unset($data['ConFax']);
            }
            if (\array_key_exists('Adresses', $data)) {
                $values = [];
                foreach ($data['Adresses'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setAdresses($values);
                unset($data['Adresses']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('conId') && null !== $object->getConId()) {
                $data['ConId'] = $object->getConId();
            }
            $data['ConTitre'] = $object->getConTitre();
            $data['ConNom'] = $object->getConNom();
            $data['ConFonction'] = $object->getConFonction();
            $data['ConObservation'] = $object->getConObservation();
            $data['ConDefault'] = $object->getConDefault();
            $data['ConEmail'] = $object->getConEmail();
            if ($object->isInitialized('conTelephone') && null !== $object->getConTelephone()) {
                $data['ConTelephone'] = $object->getConTelephone();
            }
            if ($object->isInitialized('conPortable') && null !== $object->getConPortable()) {
                $data['ConPortable'] = $object->getConPortable();
            }
            if ($object->isInitialized('conFax') && null !== $object->getConFax()) {
                $data['ConFax'] = $object->getConFax();
            }
            if ($object->isInitialized('adresses') && null !== $object->getAdresses()) {
                $values = [];
                foreach ($object->getAdresses() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['Adresses'] = $values;
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact' => false];
        }
    }
}